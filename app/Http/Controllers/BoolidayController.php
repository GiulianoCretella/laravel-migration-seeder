<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booliday;

class BoolidayController extends Controller
{
    public function index(){
        $boolidays = booliday::all();
        dump($boolidays);
        return view('boolidays',compact('boolidays'));
    }
    public function show($id){
        $booliday = booliday::findOrFail($id);
        return view('booliday',compact('booliday'));
    }
}
