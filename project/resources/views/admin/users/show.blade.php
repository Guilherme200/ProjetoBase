@extends('layouts.app')
@section('title', __('headings.users.show'))

@section('breadcrumb')
<breadcrumb icon="fas fa-user-alt" header="@lang('headings.users.show')">
    <breadcrumb-item href="{{ route('home') }}">
        @lang('breadcrumb.common.home')
    </breadcrumb-item>

    <breadcrumb-item href="{{ route('admin.users.index') }}">
        @lang('breadcrumb.users.index')
    </breadcrumb-item>

    <breadcrumb-item active>
        @lang('breadcrumb.users.show')
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="form-row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name">
                        @lang('labels.common.name')
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" value="{{ $user->name ?? '' }}" disabled>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">
                        @lang('labels.common.email')
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-at"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" value="{{ $user->email ?? '' }}" disabled>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="created_at">
                        @lang('labels.common.created_at')
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-calendar                                                                                                          "></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" value="{{ $user->created_at ?? '' }}" disabled>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="updated_at">
                        @lang('labels.common.updated_at')
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-calendar"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" value="{{ $user->updated_at ?? '' }}" disabled>
                    </div>
                </div>
            </div>
        </div>

        <hr />

        @include('shared._partials._show_buttons', [
        'urlBack' => route('admin.users.index'),
        'urlEdit' => route('admin.users.edit', $user->id)
        ])
    </div>
</div>
@endsection