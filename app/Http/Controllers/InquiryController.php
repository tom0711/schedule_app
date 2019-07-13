<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use wasabi\Inquiry;

class InquiryController extends Controller
{
  // お問い合わせ一覧ページ
  public function index(Request $request){
    $items = Inquiry::all();
    foreach($items as $item){
      $date = date_create($item->created_at);
      $date = date_format($date, 'Y-m-d');
      $item->date = $date;
      if(isset($item->answer)){
        $item->answer_true = '○';
      }
    }

    $request->all();
    $request->header('content-type');

    if($request->isjson()){
      $json = $request->json;
    }else{
      $json = '';
    }

    $id = Auth::user()->id;

    return view('inquiry.index', ['items' => $items, 'id' => $id, 'json' => $json]);
  }

  // お問い合わせ入力ページ
  public function add(Request $request)
  {
    if(!$request->title && !$request->inquiry){
      return view('inquiry.add');
    }else{
      $items = [
        'title' => $request->title,
        'inquiry' => $request->inquiry,
      ];

      return view('inquiry.add', ['items' => $items]);
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
    $user_id = Auth::user()->id;
    $items = [
      'title' => $request->title,
      'user_id' => $user_id,
      'question' => $request->inquiry,
    ];
    Inquiry::create($items);

    return view('inquiry.done', ['items' => $items]);
  }
}
