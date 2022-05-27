<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // the miracle
        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '1',
            'title' => "Superstar vs. Super Loser"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '2',
            'title' => "Tell Me Your Wish"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '3',
            'title' => "Kwon Si-Ah vs Kwon Si-Yeon"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '4',
            'title' => "Beginning of the Miracle"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '5',
            'title' => "Between Romance and Anxiety"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '6',
            'title' => "I Do Not Want to Go Back"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '7',
            'title' => "Chubby Girl's Charming Point"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '8',
            'title' => "Secret of the Necklace"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '9',
            'title' => "If We Stay the Same"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '10',
            'title' => "Can I Love Myself"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '11',
            'title' => "It was A Miracle"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '12',
            'title' => "Unexpected Moment"
        ]);

        // my first first love season 2
        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '1',
            'title' => "The Real Reason"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '2',
            'title' => "His Priority"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '3',
            'title' => "Five Degress of Separation"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '4',
            'title' => "Alone, Together"
        ]);
        
        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '5',
            'title' => "Unspeakable Secrets"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '6',
            'title' => "Something Only I Can Do"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '7',
            'title' => "Watching Her Watching Him"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '8',
            'title' => "My First First Love"
        ]);

        // nevertheless
        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '1',
            'title' => "There's No Such Thing as Fate"
        ]);
        
        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '2',
            'title' => "It's Only Me"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '3',
            'title' => "It Has Already Begun"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '4',
            'title' => "I Know It Isn't Love"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '5',
            'title' => "I Know Nothing Will Change"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '6',
            'title' => "There's No Such Thing as Love"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '7',
            'title' => "I Know There's No Turning Back"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '8',
            'title' => "I know It's a Lie"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '9',
            'title' => "I Know It's Over"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '10',
            'title' => "Nevertheless, I Still"
        ]);

        // mad for each other
        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '1',
            'title' => "Rainy Days Bring Out The Mad People"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '2',
            'title' => "People Who Make You Angry"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '3',
            'title' => "Help Me"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '4',
            'title' => "There are No Bad Dogs"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '5',
            'title' => "A Big Barking Dog That Doesn't Bite Women"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '6',
            'title' => "Run Away"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '7',
            'title' => "The Bolt Opens"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '8',
            'title' => "Maybe We're the Only Okay Ones"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '9',
            'title' => "To Have Any Ally"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '10',
            'title' => "From Today We Are"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '11',
            'title' => "Clear After Rain"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '12',
            'title' => "Love That Didn't Hurt Too Much"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '13',
            'title' => "Goodbye and Hello"
        ]);
        
        // spongebob squarepants
        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '1',
            'title' => "Extreme Spots/Squirrel Record"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '2',
            'title' => "Patrick-Man!/Gary's New Toy"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '3',
            'title' => "License to Milkshake/Squid Baby"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '4',
            'title' => "Little Yellow Book/Bumper to Bumper"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '5',
            'title' => "Eek, an Urchin!/Squid's Defense"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '6',
            'title' => "Jailbreak!/Evil Spatula"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '7',
            'title' => "Spongebob vs The Goo"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '8',
            'title' => "Safe Deposit Krabs/Plankton's Pet"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '9',
            'title' => "Don't Look Now"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '10',
            'title' => "Kenny the Cat/Yeti Krabs"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '11',
            'title' => "Spongebob, You're Fired!"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '12',
            'title' => "Lost in Bikini Bottom/Tutor Sauce"
        ]);

        // angry birds : summer madness
        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '1',
            'title' => "Cabin Raid!"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '2',
            'title' => "Hospital Sweet"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '3',
            'title' => "Microphone Mayhem!"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '4',
            'title' => "Dodgebirds"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '5',
            'title' => "It's Raining, It's Boring"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '6',
            'title' => "The Big Bird Bake Off"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '7',
            'title' => "Much Ado About Pudding"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '8',
            'title' => "The New Pig"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '9',
            'title' => "Space Oddities"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '10',
            'title' => "Bomb's Away"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '11',
            'title' => "Splashageddon!"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '12',
            'title' => "Misadvantures In Hatchling-Sitting"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '13',
            'title' => "The Golden Pineapple"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '14',
            'title' => "A-Haw-Haw"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '15',
            'title' => "Stopped Short"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '16',
            'title' => "Fowl Weather!"
        ]);
        
        // city of ghosts
        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '1',
            'title' => "The Sort of Japanese Restaurant"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '2',
            'title' => "Venice"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '3',
            'title' => "Leimert Park"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '4',
            'title' => "Tovaangar"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '5',
            'title' => "Bob and Nancy"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '6',
            'title' => "Koreatown"
        ]);

        // wizards: tales of arcadia
        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '1',
            'title' => "Spellbound"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '2',
            'title' => "History in the Making"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '3',
            'title' => "Witch Hunt"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '4',
            'title' => "Lady of The Lake"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '5',
            'title' => "Battle Royale"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '6',
            'title' => "Killahead, Part One"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '7',
            'title' => "Killahead, Part Two"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '8',
            'title' => "Wizard Underground"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '9',
            'title' => "Dragon's Den"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '10',
            'title' => "Our Final Act"
        ]);

        // bridgerton
        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '1',
            'title' => "Diamond of The First Water"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '2',
            'title' => "Shock and Delight"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '3',
            'title' => "Art of The Swoon"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '4',
            'title' => "An Affair of Honor"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '5',
            'title' => "The Duke and I"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '6',
            'title' => "Swish"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '7',
            'title' => "Oceans Apart"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '8',
            'title' => "After The Rain"
        ]);

        // inventing anna
        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '1',
            'title' => "Life of a VIP"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '2',
            'title' => "The Devil Wore Anna"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '3',
            'title' => "Two Birds, One Throne"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '4',
            'title' => "A Wolf in Chic Clothing"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '5',
            'title' => "Check Out Time"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '6',
            'title' => "Friends in Low Places"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '7',
            'title' => "Cash on Delivery"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '8',
            'title' => "Too Rich for Her Blood"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '9',
            'title' => "Dangerously Close"
        ]);

        // how to get away with murder
        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '1',
            'title' => "Pilot"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '2',
            'title' => "It's All Her Fault"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '3',
            'title' => "Smile, or Go to Jail"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '4',
            'title' => "Let's Get to Scooping"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '5',
            'title' => "We're Not Friends"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '6',
            'title' => "Freakin' Whack-A-Mole"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '7',
            'title' => "He Deserved to Die"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '8',
            'title' => "He Has a Wife"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '9',
            'title' => "Kill Me, Kill Me, Kill Me"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '10',
            'title' => "Hello Raskolnikov"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '11',
            'title' => "Best Christmas Ever"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '12',
            'title' => "She's a Murderer"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '13',
            'title' => "Mama's Here Now"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '14',
            'title' => "The Night Lila Dead"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '15',
            'title' => "It's All My Fault "
        ]);

        // the mess you left behind
        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '1',
            'title' => "Into the Lion's Den"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '2',
            'title' => "They Know"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '3',
            'title' => "Count to Three"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '4',
            'title' => "Downward Spiral"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '5',
            'title' => "The Secret Place"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '6',
            'title' => "Your Dark Side"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '7',
            'title' => "The Third Victim"
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '8',
            'title' => "The Mess You Left Behind"
        ]);
    }
}
