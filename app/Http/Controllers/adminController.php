<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function index(){
    	return view('backend.index');
    }

    public function viewcategory(){
    	$data = DB::table('categories')->get();
    	return view('backend.category',['data' => $data]);
    }
    
}
