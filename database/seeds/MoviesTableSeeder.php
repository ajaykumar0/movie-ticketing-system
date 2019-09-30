<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
        		[
        			'title' => 'Dream Girl',
                    'url' => 'https://www.oracleglobe.com/wp-content/uploads/2019/09/dream-girl.jpg',
        			'genre' => 'COMEDY, DRAMA, ROMANTIC',
        			'description' => 'Ayushmann Khurrana in and as Dream Girl! From the local cop to a `Haryanvi` gujjar boy, to his girlfriend`s brother, everybody is smitten by Dream Girl Pooja and her mesmerising voice, leading to a series of unusual, crazy situations.',
        			'durationInMinutes' => 125,
        			'language' => 'HINDI',
        			'releaseDate' => '2019-09-13'
        		],
                [
        			'title' => 'War',
                    'url' => 'https://i.ytimg.com/vi/tQ0mzXRk-oM/maxresdefault.jpg',
        			'genre' => 'ACTION, THRILLER',
        			'description' => 'War is a high-intensity Bollywood action drama which stars Hrithik Roshan, Tiger Shroff, Vaani Kapoor, among other stars. Directed by Siddharth Anand, War movie is about a special agent Kabir (Hrithik Roshan) who has gone rogue and his student, Khalid (Tiger Shroff) is entrusted to take him down.',
        			'durationInMinutes' => 156,
        			'language' => 'HINDI, TELUGU, TAMIL',
        			'releaseDate' => '2019-10-02'
        		],
                [
        			'title' => 'Chhichhore',
                    'url' => 'https://i.ytimg.com/vi/9kykB_mjW6M/maxresdefault.jpg',
        			'genre' => 'COMEDY, DRAMA, ROMANTIC',
        			'description' => 'Chhichhore takes you on an exuberant and hilarious journey through college life where you meet a bunch of interesting `losers`: Anni, Maya, Sexa, Derek, Mummy, Acid, and Bevda. They as a group go through a seamless transition from past to present and end up at a reunion they could never have thought of.',
        			'durationInMinutes' => 146,
        			'language' => 'HINDI',
        			'releaseDate' => '2019-09-06'
        		],
        		[
        			'title' => 'Joker',
                    'url' => 'https://6a25bbd04bd33b8a843e-9626a8b6c7858057941524bfdad5f5b0.ssl.cf5.rackcdn.com/styles/movie_1500x580/rcf/news/Joker_annoucement_blog.jpg?itok=DSC0ZBqW',
        			'genre' => 'CRIME, FANTASY, THRILLER',
        			'description' => 'Arthur Fleck, a man struggling with loneliness and isolation, wears two masks. One, he paints on for his day job as a clown. The other is a guise he projects in an attempt to find his place in Gotham City`s fractured society.',
        			'durationInMinutes' => 124,
        			'language' => 'ENGLISH',
        			'releaseDate' => '2019-10-02'
        		],
        		[
        			'title' => 'Section 375',
                    'url' => 'https://i.ytimg.com/vi/UWjxS8EJ4Z8/maxresdefault.jpg',
        			'genre' => 'DRAMA, THRILLER',
        			'description' => 'A celebrated Bollywood director Rohan Khurana stands accused by a member of his female crew, Anjali Dangle of having raped her at his residence.',
        			'durationInMinutes' => 124,
        			'language' => 'HINDI',
        			'releaseDate' => '2019-09-13'
        		],
        		[
        			'title' => 'Abominable',
                    'url' => 'https://static.moviecrow.com/marquee/animated-movie-abominable-releasing-in-2d-3d-in-india/167950_thumb_665.jpg',
        			'genre' => 'ADVENTURE, ANIMATION, COMEDY',
        			'description' => 'Teenager Yi is taken by surprise when she encounters a Yeti on the roof of her apartment and along with her friends Jin and Peng, decide to name him "Everest". Together they embark on a quest to reunite Everest with his family and begin their journey to the highest point on Earth.',
        			'durationInMinutes' => 97,
        			'language' => 'ENGLISH',
        			'releaseDate' => '2019-09-27'
        		],
        		[
        			'title' => 'Mission Mangal',
                    'url' => 'https://pmcdeadline2.files.wordpress.com/2019/08/poster_twitteradapt.jpg?crop=156px%2C0px%2C1982px%2C1112px&resize=681%2C383',
        			'genre' => 'DRAMA, HISTORICAL',
        			'description' => 'Inspired by true events that led up to ISRO`s Mars Orbiter Mission (Mangalyaan), the film tells the story of a group of scientists who overcame their professional and personal tribulations to mastermind the greatest accomplishment in Indian space history.
',
        			'durationInMinutes' => 133,
        			'language' => 'HINDI',
        			'releaseDate' => '2019-08-15'
        		],
        		[
        			'title' => 'Prassthanam',
                    'url' => 'https://m.timesofindia.com/photo/70908853.jpeg',
        			'genre' => 'ACTION, CRIME, DRAMA',
        			'description' => 'Prassthanam tells the story of Baldev Pratap Singh, a ruthless politician, and his sons. Ayush, his stepson, idolises him and wants to follow in his footsteps, while Vivaan, his son by blood, is consumed by jealousy and wants to destroy it all.',
        			'durationInMinutes' => 141,
        			'language' => 'HINDI',
        			'releaseDate' => '2019-09-20'
        		],
        		[
        			'title' => 'Rambo: Last Blood',
                    'url' => 'https://cdn.mos.cms.futurecdn.net/DKFLKT8UxhiYf2Vp9uo9FA-768-80.jpg',
        			'genre' => 'ACTION, ADVENTURE, THRILLER',
        			'description' => 'The fifth installment of the Rambo franchise brings us Sylvester Stallone reprising his role as John Rambo, who goes on yet another deadly journey. This time, he faces off against a Mexican cartel in order to save his niece and bring her back home.',
        			'durationInMinutes' => 103,
        			'language' => 'ENGLISH, TAMIL, TELUGU, HINDI',
        			'releaseDate' => '2019-09-20'
        		],
        		[
        			'title' => 'Saaho',
                    'url' => 'https://i.ytimg.com/vi/HiwFJ97qUx4/maxresdefault.jpg',
        			'genre' => 'ACTION, ROMANTIC, THRILLER',
        			'description' => 'Amidst a power struggle between higher authorities, unrelated episodes occur in parts of the world that are entwined in an unforeseen revelation of convoluted manipulations. Saaho challenges the perceptions of the audience as to who is the hunter and who is being hunted.',
        			'durationInMinutes' => 171,
        			'language' => 'TELUGU, TAMIL, HINDI, MALAYALAM',
        			'releaseDate' => '2019-08-30'
        		]
        	]
        );
    }
}
