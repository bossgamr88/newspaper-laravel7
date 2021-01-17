<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
    	return view('backend.index');
    }

    public function viewcategory(){
    	return view('backend.category');
    }

}
