<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
    public function index($slug){
        

        return view('pages.article',compact('slug'));
    }
}
