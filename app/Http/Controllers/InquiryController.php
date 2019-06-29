<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\HomeRequest;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
  public function index(Request $request){
    return view('inquiry.index');
  }

  public function confirm(Request $request)
  {
    return view('inquiry.confirm');
  }
}
