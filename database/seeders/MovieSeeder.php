<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // drama
        DB::table('movies')->insert([
            'genre_id' => '1',
            'title' => 'The Miracle',
            'photo' => 'miracle_picture',
            'description' => "Polar opposites in personality and looks, fraternal twin sisters who live completely different lives wake up one day to find they have switched bodies.",
            'rating' => '3'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '1',
            'title' => 'My First First Love Season 1',
            'photo' => 'firstlove_picture',
            'description' => "Due to various personal reasons, a group of Yun Tae-o's friends move into his house, where they experience love, friendship, and everything in between",
            'rating' => '4'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '1',
            'title' => 'Nevertheless',
            'photo' => 'nevertheless_picture',
            'description' => "The intoxicating charm of a flirtatious art school classmate pulls a reluctant love cynic into a friends-with-benefits relationship",
            'rating' => '5'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '1',
            'title' => 'Mad for Each Other',
            'photo' => 'madforeachother_picture',
            'description' => "Bothered to realize they are next-door neighbors and share a psychiatrist, a man and a woman find it is impossible to stay out of each other's way",
            'rating' => '3'
        ]);

        // DB::table('movies')->insert([
        //     'genre_id' => '1',
        //     'title' => 'Do Do Sol Sol La La Sol',
        //     'photo' => 'dodosolsol_picture',
        //     'description' => "A riches-to-rags pianist who loses everything but her smile is guided by twinkling little stars to a small town where se finds hope, home and love",
        //     'rating' => '4'
        // ]);

        // kids
        DB::table('movies')->insert([
            'genre_id' => '2',
            'title' => 'SpongeBob SquarePants season 9',
            'photo' => 'spongebob_picture',
            'description' => "From his pineapple home base under the sea, SpongeBob and his friends, including his meowing pet snail Gary, get into memorable misadvantures.",
            'rating' => '4'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '2',
            'title' => 'Angry Birds: Summer Madness',
            'photo' => 'angrybirds_picture',
            'description' => "Teen birds Red, Chuck, Bomb and Stella are crashing through Camp Splinterwood with their fellow fathered campers for a summer of high-flying hjinks.",
            'rating' => '4'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '2',
            'title' => 'City of Ghosts',
            'photo' => 'cityofghosts_picture',
            'description' => "Meet the Ghost Club! Their adventures take them all around Los Angeles as they interview ghosts, solve problems and learn about their cty's history",
            'rating' => '2'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '2',
            'title' => 'Wizards: Tales of Arcadia',
            'photo' => 'wizards_picture',
            'description' => "Merlin's apprentice joins Arcadia's heroes on a time-bending adventure in Camelot, where conflict is brewing between the human, troll and magical worlds.",
            'rating' => '3'
        ]);

        // tv show
        DB::table('movies')->insert([
            'genre_id' => '3',
            'title' => 'Bridgerton',
            'photo' => 'bridgerton_picture',
            'description' => "The eight close-knit siblings of the Bridgerton family look for love and happiness in London high society.",
            'rating' => '4'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '3',
            'title' => 'Inventing Anna',
            'photo' => 'inventinganna_picture',
            'description' => "Audacious entrepreneur or con artist? A journalist chases down the story of Anna Delvey, who convinced New York's elite she was a German heiress.",
            'rating' => '3'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '3',
            'title' => 'How to Get Away with Murder',
            'photo' => 'howtogetawaywithmurder_picture',
            'description' => "Brilliant criminal defense attorney and law professor Annalise Keating, plus five of her students, become involved in a twisted murder case.",
            'rating' => '4'
        ]);

        DB::table('movies')->insert([
            'genre_id' => '3',
            'title' => 'The Mess you Left Behind',
            'photo' => 'themessyouleftbehind_picture',
            'description' => "A teacher starts her job at a high school but is haunted by a suspicious death that occured three weeks before and begins fearing for her own life",
            'rating' => '5'
        ]);
    }
}
