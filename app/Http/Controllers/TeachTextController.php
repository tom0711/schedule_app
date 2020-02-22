<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;

class TeachTextController extends Controller
{
    public function index(Request $request){
    	return view('teach_text.index');
    }
}
