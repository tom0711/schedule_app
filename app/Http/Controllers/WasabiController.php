<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class WasabiController extends Controller
{
    public function index(Request $request)
    {
      if(Auth::check()){
        $id = Auth::user()->id;

        return redirect('/home');
      }else{
        return view('wasabi');
      }
    }
}
