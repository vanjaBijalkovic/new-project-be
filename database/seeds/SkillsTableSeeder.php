<?php

use Illuminate\Database\Seeder;

use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'name' => 'Technical Skills'
            ],
            [
                'name' => 'Business Skill'
            ]
        ];

        foreach($skills as $skill) {
            Skill::create($skill);
        }
    }
}
