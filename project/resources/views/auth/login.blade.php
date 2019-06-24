@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-5">
        <div class="text-center">
            <img class="mb-3" src="/assets/img/logo-dark.png" width="50">
            <h1 class="h4 text-gray-900 mb-4">
                @lang('headings.admin_auth.login')
            </h1>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="user" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input name="email" id="email"
                    class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    type="email"
                    value="{{ old('email') }}"
                    placeholder="@lang('phrases.auth.email')">
                @errorblock('email')
            </div>

            <div class="form-group">
                <input name="password" id="password"
                    class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    type="password"
                    value="{{ old('password') }}"
                    placeholder="@lang('phrases.auth.password')">
                @errorblock('password')
            </div>

            <div class="form-group text-center px-0 px-sm-5">
                <button type="submit" class="btn btn-primary btn-block btn-user">
                    @lang('links.auth.login')
                </button>
            </div>

            <hr />

            <div class="form-group text-center mb-0">
                <a class="small" href="{{ route('password.request') }}">
                    <i class="fas fa-exclamation-triangle mr-1 text-warning"></i>@lang('links.auth.forgot_password')
                </a>
            </div>

        </form>
    </div>
</div>
@endsection