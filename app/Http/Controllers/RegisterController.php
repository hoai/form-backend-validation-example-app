<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {

        return view('register')->with(compact('register'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]); 


        return ['message' => 'Save register!'];
    }
}
