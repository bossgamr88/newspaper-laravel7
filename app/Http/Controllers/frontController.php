<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{

	public function __construct(){
		$categories = DB::table('categories')->where('status','on')->get();
		view()->share([
			'categories' => $categories,
		]);
	}

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
