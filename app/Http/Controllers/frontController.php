<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
    	return view('frontend.index');
    }

    public function category(){
    	return view('frontend.category');
    }

	public function post(){
		return view('frontend.article');
	}    
}
