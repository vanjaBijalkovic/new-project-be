<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  QueryBuilder::for(Skill::class)
            ->get();
    }
}
