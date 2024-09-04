<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\DetailsController;
use DB;

class DetailsController extends Controller
{
    public function insert_input(){
        return view('student_info');
    }
    public function insert(Request $request){

        $name=$request->input('name');
        DB::insert('insert into users (name) values (?)', [$name]);
        return "Submited sucessfully <a href='/'>Click here</a>";
    }

}
