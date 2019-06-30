@extends('layouts.wasabi')

@section('title', 'wasabi')

@section('content')
  <div class="flex-center position-ref full-height back-white">
    <!-- @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a href="{{ url('/home') }}">Home</a>
        @else
          <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      </div>
    @endif -->

    <div class="index-content">
      <div class="title m-b-md">
        Welcome to the wasabi.
      </div>
      <div class="sub-title">
        <p>Your calendar can change your life.</p>
        <p>スケジュール管理をして仕事もプライベートも充実させましょう。</p>
      </div>
      <div class="links">
        <a href="{{ route('register') }}" class="btn-square-raised sign-botton">新規登録</a>
        <a href="{{ route('login') }}" class="btn-square-raised sign-botton">ログイン</a>
      </div>
    </div>
  </div>
@endsection
