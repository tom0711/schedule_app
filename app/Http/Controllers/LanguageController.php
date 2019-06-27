<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
  /**
  * 言語切り替え処理
  */
  public function switchLang($lang)
  {
    if(array_key_exists($lang, Config::get('languages'))){
      Session::put('applocale', $lang);
    }

    return Redirect::back();
  }
}
