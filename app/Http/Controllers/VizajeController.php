<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Seminar;

class VizajeController extends Controller
{
    public function index() {
        $courses = Course::where('type','vizage')->get(); 
        $seminars = Seminar::where('type','vizage')->get();  

        
        return view('vizaje.index',[
            'courses' => $courses,
            'seminars' => $seminars
        ]);

    }
}
