@extends('layouts.auth')
@section('title', __('phrases.auth.reset_password'))

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-5">
        <div class="text-center">
            <img class="mb-3" src="/assets/img/logo-dark.png" width="50">
            <h1 class="h4 text-gray-900 mb-4">
                @lang('phrases.auth.create_new_password')
            </h1>
        </div>
        <form class="user" method="POST" action="{{ route('password.change') }}" autocomplete="off">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @else
                <div class="form-group">
                    <input name="email" id="email"
                        class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        type="email"
                        value="{{ old('email', $email ?? '') }}"
                        placeholder="@lang('phrases.auth.email')">
                    @errorblock('email')
                </div>

                <div class="form-group">
                    <input name="password" id="password"
                        class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }}"
                        type="password"
                        value="{{ old('password', $password ?? '') }}"
                        placeholder="@lang('phrases.auth.password')">
                    @errorblock('password')
                </div>

                <div class="form-group">
                    <input name="password_confirmation" id="password_confirmation"
                        class="form-control form-control-user {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                        type="password"
                        value="{{ old('password_confirmation', $password_confirmation ?? '') }}"
                        placeholder="@lang('phrases.auth.password_confirmation')">
                    @errorblock('password_confirmation')
                </div>

                <div class="form-group text-center px-0 px-sm-5">
                    <button type="submit" class="btn btn-primary btn-block btn-user">
                        @lang('phrases.auth.password_save')
                    </button>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
