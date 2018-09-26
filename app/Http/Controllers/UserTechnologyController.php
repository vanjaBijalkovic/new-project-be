<?php

namespace App\Http\Controllers;

use App\UserTechnology;
use Illuminate\Http\Request;

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

        return UserTechnology::where('user_id', $userId)
            // geting nested object with eger loading
            // ->with('technologies.categories.skills')
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
