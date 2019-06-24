@extends('layouts.app')
@section('title', __('headings.users.index'))

@section('breadcrumb')
    <breadcrumb icon="fas fa-users-cog" header="@lang('headings.users.index')">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('breadcrumb.common.home')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('breadcrumb.users.index')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <data-list
        data-source="{{ route('admin.pagination.users') }}"
        delete-message="Tem certeza que deseja apagar este registro ?"
        url-create="{{ route('admin.users.create') }}"
        label-create="@lang('links.common.create')"
    />

    <template id="data-list" slot-scope="modelScope">
        <div class="card">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <input type="text" v-model="query" class="form-control mb-2 mb-sm-0" placeholder="Buscar ...">
                    </div>
                    <div class="col-md-7 col-sm-6 text-right">
                        <a v-if="urlCreate" class="btn btn-primary" :href="urlCreate"
                            data-toggle="tooltip" data-placement="left" :title="labelCreate">
                            <i class="fas fa-plus mr-1"></i>
                            @{{ labelCreate }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" >
                <loader :show-loader="isLoading"></loader>
                <div class="table-responsive" v-show="!isLoading">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                @include('admin.users.partials._head')
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="no_results">
                                @include('shared._partials._empty_table')
                            </tr>
                            <tr v-else v-for="(item, index) in items" :key="index">
                                @include('admin.users.partials._body')
                            </tr>
                        </tbody>
                    </table>
                    @include('shared._partials._pagination')
                </div>
            </div>
        </div>
    </template>
@endsection
