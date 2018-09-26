<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Software Dev',
                'skill_Id' => 1
            ],
            [
                'name' => 'Data Base',
                'skill_id' => 1
            ],
            [
                'name' => 'Office',
                'skill_id' => 2
            ],
            [
                'name' => 'Hobies',
                'skill_id' => 2
            ]
        ];

        foreach($categories as $category) {
            Category::create($category);
        }
    }
}
