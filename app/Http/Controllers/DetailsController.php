<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function insert_input()
    {
        return view('student_info');
    }

    public function insert(Request $request)
    {

        $name = $request->input('name');
        DB::insert('insert into users (name) values (?)', [$name]);

        return "Submited sucessfully <a href='/'>Click here</a>";
    }
}
