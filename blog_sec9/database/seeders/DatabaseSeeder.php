<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Post::truncate();
        Category::truncate();


        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        /*
        Post::factory(3)->create([
            'user_id' => $user->id
        ]); */

        Post::factory(6)->create();

        //$user = User::factory()->create();

        /*
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'my first post',
            'slug' => 'my-first-post',
            'excerpt' => 'quiz prog. Junk MTV quiz graced by fox whelps.',
            'body' => 'quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How qu'
        ]);

        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'my secound post',
            'slug' => 'my-sec-post',
            'excerpt' => 'quiz prog. Junk MTV quiz graced by fox whelps.',
            'body' => 'quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How qu'
        ]);
        */


    }
}
