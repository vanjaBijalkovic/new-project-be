<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  QueryBuilder::for(Category::class)
            ->get();
    }
}
