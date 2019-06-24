@extends('layouts.app')

@section('content')
    <div class="display-1 text-warning mb-5">
        <i class="fe fe-lock mr-2"></i>403
    </div>
    <h1 class="h2 mb-3">
        @lang('phrases.errors.titles.access-forbidden')
    </h1>
    <p class="h4 text-muted font-weight-normal mb-7">
        @lang('phrases.errors.messages.access-forbidden')
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
