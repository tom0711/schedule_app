@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('メールを確認してください') }}
                    {{ __('メールが届かなかった場合は') }}, <a href="{{ route('verification.resend') }}">{{ __('コチラからやり直す') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
