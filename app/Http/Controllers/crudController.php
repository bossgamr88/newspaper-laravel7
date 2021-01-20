<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use DB;
use Session;

class crudController extends Controller
{
    public function insertData(){
    	// $data = Input::all();
    	// print_r($data);
    	$data = Input::except('_token');
    	// print_r($data);
    	// DB::('')->insert($data);

    	// เปลี่ยนเป็น categories
    	$tbl = decrypt($data['tbl']);
    	// print_r($tbl);

    	// save categories on database
    	unset($data['tbl']); // เเก้ Unknown cloumn 'tbl' in 'fieId'  
		DB::table($tbl)->insert($data);    	
    }
}
