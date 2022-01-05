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
        // $this->call([
        //     UsersSeeder::class,
        // ]);


        \App\Models\User::create([

            'name'=>'John Doe',
            'email'=>'doe@gmail.com',
            'image'=>'',
            'status'=>1,
            'info'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae eius, eum animi quam commodi facilis odit illo quas inventore temporibus, qui repellat. Dicta excepturi voluptatibus, temporibus accusantium veniam quam provident!',
            'password'=>Hash::make('147852369asd')


        ]);

        // \App\Models\User::factory(2)->create();
    }
}
