<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
  // お問い合わせ入力ページ
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

  // お問い合わせ確認ページ
  public function confirm(Request $request)
  {
    $items = [
      'title' => $request->title,
      'inquiry' => $request->inquiry,
    ];
    return view('inquiry.confirm', ['items' => $items]);
  }

  // お問い合わせ完了ページ
  public function done(Request $request)
  {
    $items = [
      'title' => $request->title,
      'inquiry' => $request->inquiry,
    ];
    return view('inquiry.done', ['items' => $items]);
  }
}
