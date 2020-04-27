<?php

use Illuminate\Database\Seeder;

class followerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 100)->create();

        \App\Followers::create([
            'user_id' => 1,
            'follower_id' => 2
        ]);
        \App\Followers::create([
            'user_id' => 1,
            'follower_id' => 3
        ]);
        \App\Followers::create([
            'user_id' => 1,
            'follower_id' => 4
        ]);
        \App\Followers::create([
            'user_id' => 2,
            'follower_id' => 1
        ]);

        \App\Followers::create([
            'user_id' => 3,
            'follower_id' => 1
        ]);
    }
}
