<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Seminar;


class ManicureController extends Controller
{
    public function index() {
        $courses = Course::where('type','manicure')->get();
        $seminars = Seminar::where('type','manicure')->get();
        
        return view('manicure.index',[
            'courses' => $courses,
            'seminars' => $seminars
        ]);
    }
}
