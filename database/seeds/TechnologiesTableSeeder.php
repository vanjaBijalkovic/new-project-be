<?php

use Illuminate\Database\Seeder;
use App\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            [
                'name' => 'Java',
                'category_id' => 1,
            ],
            [
                'name' => 'JavaScript',
                'category_id' => 1,
            ],
            [
                'name' => 'Php',
                'category_id' => 1,
            ],
            [
                'name' => 'MySQL',
                'category_id' => 2,
            ],
            [
                'name' => 'Excel',
                'category_id' => 3,
            ],
            [
                'name' => 'PowerPoint',
                'category_id' => 3,
            ],
            [
                'name' => 'Perl',
                'category_id' => 1,
            ],
            [
                'name' => 'PosgreSQL',
                'category_id' => 2,
            ],
            [
                'name' => 'Fishing',
                'category_id' => 4
            ]
        ];

        foreach($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
