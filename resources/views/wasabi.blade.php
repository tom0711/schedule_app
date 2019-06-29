@extends('layouts.wasabi')

@section('title', 'wasabi')

<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
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
  @endif

  <div class="index-content">
    <div class="title m-b-md">
      Welcome to the wasabi.
    </div>
    <!-- <p>Planing schedule is finding yourself.</p> -->
    <p>Your calendar can change your life.</p>
    <p>スケジュール管理をして普段の生活を充実させたい方へ</p>

    <div class="links">
      <a href="{{ route('register') }}" class="btn-square-raised sign-botton">新規登録</a>
      <a href="{{ route('login') }}" class="btn-square-raised sign-botton">ログイン</a>
    </div>
  </div>
</div>
