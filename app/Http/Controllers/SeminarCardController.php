<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;

class SeminarCardController extends Controller
{
    public function index($seminars,$id) {
        $seminar = Seminar::where('id',$id)->first();

        return view('seminarcard.index',[
            'seminar' => $seminar,
            'card_route' => 'seminars'
        ]);
    }
}
