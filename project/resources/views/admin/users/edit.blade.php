@extends('layouts.app')
@section('title', __('headings.users.edit'))

@section('breadcrumb')
<breadcrumb icon="fas fa-user-edit" header="@lang('headings.users.edit')">
    <breadcrumb-item href="{{ route('home') }}">
        @lang('breadcrumb.common.home')
    </breadcrumb-item>

    <breadcrumb-item href="{{ route('admin.users.index') }}">
        @lang('breadcrumb.users.index')
    </breadcrumb-item>

    <breadcrumb-item active>
        @lang('breadcrumb.users.edit')
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @method('PUT')

            @include('admin.users.partials._form')
            <hr />
            @include('shared._partials._update_buttons', ['urlBack' => route('admin.users.index')])
        </form>
    </div>
</div>
@endsection