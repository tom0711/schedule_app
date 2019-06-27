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
      Walcome to the wasabi.
    </div>
    <p>Schedule changes your work and private.</p>

    <div class="links">
      <a href="{{ route('register') }}" class="btn-square-raised sign-botton">Sign Up</a>
      <a href="{{ route('login') }}" class="btn-square-raised sign-botton">Sign In</a>
    </div>
  </div>
</div>
