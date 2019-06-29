@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ようこそ！ {{ Auth::user()->name }} さん</div>
                <div class="card-body">
                  <div class="card-aside-left">
                    <ul>
                      <li><a href="#">Schedule</a></li>
                      <li><a href="#">Todo List</a></li>
                      <li><a href="#">Signal Words</a></li>
                      <li><a href="#">Board</a></li>
                      <li><a href="#">Inquiry</a></li>
                      <li><a href="#">Setting</a></li>
                    </ul>
                  </div>
                  <div class="card-main">
                    ログインに成功しました。
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
