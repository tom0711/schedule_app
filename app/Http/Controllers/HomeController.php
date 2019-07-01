<?php

namespace wasabi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\HomeRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $id = $request->id;
      $users = DB::table('users');
      $data = $users->pluck('name');
      $item = DB::table('users')->where('id', $id)->first();

      return view('home', ['item' => $item]);
    }
}
