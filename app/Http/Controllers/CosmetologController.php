<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Seminar;

class CosmetologController extends Controller
{
    public function index() {
        $courses = Course::where('type','cosmetolog')->get();
        $seminars = Seminar::where('type','vizage')->get();
        
        
        return view('cosmetolog.index',[
            'courses' => $courses,
            'seminars' => $seminars
        ]);
    }
}
