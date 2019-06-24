@extends('layouts.auth')

@section('content-size', 'col-xl-8 col-md-12')
@section('title', 'Register')

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
            <form class="form-custom" method="POST" action="{{ route('register.clinic.store') }}">
                @csrf

                <div class="text-center">
                    <img class="mb-3" src="/assets/img/logo-dark.png" width="50">
                    <h1 class="h4 text-gray-900">
                        @lang('headings.admin_auth.register')
                    </h1>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card border-0">
                    <div class="card-body">
                        <fieldset>
                            <legend class="border-left-info pl-2">
                                Clinica
                            </legend>
                            <div class="mt-2">
                                @include('clinic.register.form._clinic')
                            </div>
                        </fieldset>

                        <fieldset class="mt-5">
                            <legend class="border-left-info pl-2">
                                Responsável
                            </legend>
                            <div class="mt-3">
                                @include('clinic.register.form._responsible')
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group text-center px-0 px-sm-5">
                    <button type="submit" class="btn btn-primary btn-block btn-custom">
                        @lang('links.common.save')
                    </button>
                </div>

                <hr>

                <div class="form-group text-center mb-0">
                    <a class="small text-muted" href="{{ route('login') }}">
                        <i class="fas fa-arrow-left mr-1 "></i>
                        @lang('phrases.auth.back_to_login_page')
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
