<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
  public function index(Request $request){

    if(!$request->title && !$request->inquiry){
      return view('inquiry.index');
    }else{
      $items = [
        'title' => $request->title,
        'inquiry' => $request->inquiry,
      ];

      return view('inquiry.index', ['items' => $items]);
    }
  }

  public function confirm(Request $request)
  {
    $items = [
      'title' => $request->title,
      'inquiry' => $request->inquiry,
    ];
    return view('inquiry.confirm', ['items' => $items]);
  }
}
