@extends('layouts.app')
@section('title', __('headings.users.create'))

@section('breadcrumb')
<breadcrumb icon="fas fa-user-plus" header="@lang('headings.users.create')">
    <breadcrumb-item href="{{ route('home') }}">
        @lang('breadcrumb.common.home')
    </breadcrumb-item>

    <breadcrumb-item href="{{ route('admin.users.index') }}">
        @lang('breadcrumb.users.index')
    </breadcrumb-item>

    <breadcrumb-item active>
        @lang('breadcrumb.users.create')
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.users.store') }}">
            @include('admin.users.partials._form')
            <hr>
            @include('shared._partials._create_buttons', ['urlBack' => route('admin.users.index')])
        </form>
    </div>
</div>
@endsection