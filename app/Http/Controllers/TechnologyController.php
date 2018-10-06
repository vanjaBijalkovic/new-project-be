<?php

namespace App\Http\Controllers;

use App\Technology;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return QueryBuilder::for(Technology::class)
            ->get();
    }
 }
