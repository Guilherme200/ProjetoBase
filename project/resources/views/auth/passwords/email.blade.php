@extends('layouts.auth')
@section('title', __('phrases.auth.reset_password'))

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-5">
        <div class="text-center">
            <img class="mb-3" src="/assets/img/logo-dark.png" width="50">
            <h1 class="h4 text-gray-900 mb-4">
                @lang('phrases.auth.reset_password')
            </h1>
            <p class="mb-4">@lang('phrases.auth.reset_password_info')</p>
        </div>
        <form class="user" method="POST" action="{{ route('password.email') }}" autocomplete="off">
            @csrf

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @else
                <div class="form-group">
                    <input name="email" id="email"
                        class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        type="email"
                        value="{{ old('email') }}"
                        placeholder="@lang('phrases.auth.email')">
                    @errorblock('email')
                </div>

                <div class="form-group text-center px-0 px-sm-5">
                    <button type="submit" class="btn btn-primary btn-block btn-user">
                        @lang('buttons.auth.send_password_reset')
                    </button>
                </div>
            @endif

            <hr>

            <div class="form-group text-center mb-0">
                <a class="small text-muted" href="{{ route('login') }}">
                    <i class="fas fa-arrow-left mr-1 "></i>@lang('phrases.auth.back_to_login_page')
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
