<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class WasabiController extends Controller
{
    public function index(Request $request)
    {
      return view('wasabi')
    }
}
