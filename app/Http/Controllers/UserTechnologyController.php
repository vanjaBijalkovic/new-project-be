<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class UserTechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = $request->get('user_id');

        return QueryBuilder::for(User::class) 
            ->where('id', $userId)
            // geting nested object with eger loading
            // ->with('userTechnologies.technologies', 'userSkills.skills', 'userCategories.categories')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = $request->input('user_id');
        $skillLevel = $request->input('skill_level');
        $technologyId = $request->input('technology_id');

        return UserTechnology::updateOrCreate(
            [
                'technology_id' => $technologyId,
                'user_id' => $userId
            ],
            [
                'technology_id' => $technologyId,
                'user_id' => $userId,
                'skill_level' => $skillLevel
            ]
        );
    }
}
