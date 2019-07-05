@extends('layouts.app')

@section('content')
  <div class="container m-bottom-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ようこそ！ {{ Auth::user()->name }} さん</div>
                <div class="card-body">
                  <div class="card-aside-left">
                    <ul>
                      <li><a href="/">スケジュール</a></li>
                      <li><a href="/">Todoリスト</a></li>
                      <li><a href="/">チャット</a></li>
                      <li><a href="/">掲示板</a></li>
                      <li><a href="/inquiry/index">お問い合わせ</a></li>
                      <li><a href="/">設定</a></li>
                    </ul>
                  </div>
                  <div class="card-main">
                    @yield('card-main')
                  </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
