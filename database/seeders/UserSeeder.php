<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        //  // User::factory(3)->create();

        // User::create([
        //     'name' => '',
        //     'username' => '',
        //     'email' => '',
        //     'password' => bcrypt('')
        // ]);
        
        User::create([
            'name' => 'Fitrah Ramdhani',
            'username' => 'fitrahramdhani',
            'email' => 'fitrahramdhani@gmail.com',
            'password' => bcrypt('roots')
        ]);

        User::create([
            'name' => 'FitrahXSenpai',
            'username' => 'fitrahxsenpai',
            'email' => 'fitrahxsenpai@gmail.com',
            'password' => bcrypt('roots')
        ]);

        User::create([
            'name' => 'FitrahXStore',
            'username' => 'fitrahxstore',
            'email' => 'fitrahxstore@gmail.com',
            'password' => bcrypt('roots')
        ]);

        User::create([
            'name' => 'Fitrah Senpai',
            'username' => 'fitrahsenpai',
            'email' => 'fitrahsenpai@gmail.com',
            'password' => bcrypt('roots')
        ]);
    }
}
