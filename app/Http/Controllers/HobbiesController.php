<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        return view('Hobbies');
    }
}
