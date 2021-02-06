<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{

	public function __construct(){
		// template 
		$categories = DB::table('categories')->where('status','on')->get();
		$setting = DB::table('settings')->first();
		if($setting){
			$setting->social = explode(',',$setting->social);
			foreach($setting->social as $social){
				$icon = explode('.',$social);
				// $icon = isset($icon[1]);
				$icon = $icon[1];
				// echo $icon;
				// exit(); 
				$icons[] = $icon;
			}
			// $icons[] = $icon;
		}else{
			$icons = [];	
		}
		// print_r($icons);
		// exit();
		view()->share([
			'categories' => $categories,
			'setting' => $setting,
			'icons' => $icons,
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
