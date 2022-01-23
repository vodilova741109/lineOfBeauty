<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $courses = Course::all();
        
        return view('home.index',[
            'courses' => $courses
        ]);
    }
}
