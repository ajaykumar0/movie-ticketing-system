<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use Validator;

use Carbon\Carbon;

use Auth;

use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'movies' => App\Movie::with('shows')->get()
        ];
        return view('home', $data);
    }

    public function movie(Request $request, $id, $title) {
        $validator = Validator::make([ 'id' => $id ], [
            'id' => 'bail|required|integer|exists:movies,id',
        ]);
        if($validator->fails()) {
            return abort(404);
        }
        $currentTime = Carbon::now();
        $movie      = App\Movie::with('shows')->whereHas('shows', function($query) use ($currentTime) {
            $query->where('showStartingTime', '>=', $currentTime);
        })
        ->find($id);

        $dates        = [];
        $theatres     = [];
        foreach ($movie->shows as $show) {

            $date= explode(' ', $show->pivot->showStartingTime)[0];
            $key = $show->theatre->id.'-'.$date;
            if(!in_array($date, $dates)) {
                $dates[] = $date;
            }
            if(
                $request->date || 
                $request->date != '' ||
                $request->date != null
            ) {
                if($request->date != $date) {
                    continue;
                }
            }
            if(!in_array($key, $theatres)) {
                $theatres[$key]['date'] = $date;
                $theatres[$key]['theatre'] = $show->theatre;
                $theatres[$key]['shows'][] = $show; continue;
            }
            $theatres[$key]['shows'][] = $show;
        }
        if($movie->title != $title) {
            return abort(404);
        }
        $data = [
            'movie' => $movie,
            'theatres' => $theatres,
            'dates' => $dates,
            'getDate' => $request->date
        ];
        return view('movie', $data);
    }

    public function order(Request $request, $id) {
        $validator = Validator::make([ 'id' => $id ], [
            'id' => 'bail|required|integer|exists:shows,id',
        ]);
        if($validator->fails()) {
            return abort(404);
        }
        $show = App\Show::find($request->id);
        
        $data = [
            'show' => $show
        ];
        return view('order', $data);
    }

    public function orderConfirm(Request $request) {
        $validator = Validator::make($request->all(), [
            'seats' => 'bail|required|integer|min:1',
            'id'    => 'bail|required|integer|exists:shows,id'
        ]);
        if($validator->fails()) {
            return abort(503);
        }
        DB::beginTransaction();
        $user = Auth::user();
        $show = App\Show::find($request->id);
        if(
            Carbon::now() > $show->showEndingTime ||
            $show->remainingSeats < $request->seats
        ) {
            return abort(503);
        }

        $subTotal = $show->price * $request->seats;
        $discount = ($user->gender == 'female')? ($subTotal/100)*5: 0;
        $total    = $subTotal - $discount;

        $show->remainingSeats -= $request->seats;
        $show->save();
        $user->bookings()->attach([
            $show->id => [
                'numberOfSeats' => $request->seats,
                'subTotal' => $subTotal,
                'discount' => $discount,
                'total' => $total,
                'status' => 'booked'
            ]
        ]);
        DB::commit();
        return redirect('/bookings');
    }

    public function bookings(Request $request) {
        return view('bookings', ['user' => Auth::user()]);
    }
}
