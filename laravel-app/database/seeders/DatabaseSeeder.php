<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create(["biography" => "lorem ipsum sit dolor set amet"]);
        \App\Models\Post::factory(3)->create();

        \App\Models\User::factory(1)->createOne([
            "name" => "john doe",
            "email" => "john.doe@acme.com",
            "password" => Hash::make("azerty"),
            "biography" => "lorem ipsum sit dolor set amet",
        ]);

        $this->call(PostSeeder::class);
    }
}
