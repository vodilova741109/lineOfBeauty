<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Seminar;

class HaircutterController extends Controller
{
    public function index() {
        $courses = Course::where('type','hairs')->get();        
        $seminars = Seminar::where('type','hair')->get();
        return view('haircutter.index',[
            'courses' => $courses,
            'seminars' => $seminars
        ]);
    }
}
