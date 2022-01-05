<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'=>'Abdul Rafay',
            'email'=>'abdulrafayrty@gmail.com',
            'image'=>'',
            'status'=>1,
            'info'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae eius, eum animi quam commodi facilis odit illo quas inventore temporibus, qui repellat. Dicta excepturi voluptatibus, temporibus accusantium veniam quam provident!',
            'password'=>Hash::make('147852369asd')


        ]);

        //
    }
}
