@extends('layouts.app')

@section('content')
    <div class="display-1 text-danger mb-5">
        <i class="fa fa-chain-broken mr-2"></i>500
    </div>
    <h1 class="h2 mb-3">
        @lang('phrases.errors.titles.internal-server-error')
    </h1>
    <p class="h4 text-muted font-weight-normal mb-7">
        @lang('phrases.errors.messages.internal-server-error')
    </p>

    <div class="btn-list">
        <a class="btn btn-pill btn-indigo" href="javascript:history.back()">
            <i class="fe fe-arrow-left mr-2"></i>@lang('links.errors.previous-page')
        </a>
        <a class="btn btn-pill btn-primary" href="{{ route('home') }}">
            <i class="fe fe-home mr-2"></i>@lang('links.errors.home-page')
        </a>
    </div>
@endsection
