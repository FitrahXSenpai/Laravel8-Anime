<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        // Category::create([
        //     'name' => '',
        //     'slug' => ''
        // ]);
        
        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        
        Category::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);
        
        Category::create([
            'name' => 'Shounen',
            'slug' => 'shounen'
        ]);

        Category::create([
            'name' => 'Seinen',
            'slug' => 'seinen'
        ]);

        Category::create([
            'name' => 'Time Travel',
            'slug' => 'time-travel'
        ]);
    }
}
