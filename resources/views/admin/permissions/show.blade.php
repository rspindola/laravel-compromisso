@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-ui-block bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.show') }} {{ trans('cruds.permission.title') }}</h4>
                        <span>Detalhes da permissáo cadastrada no sistema</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.home')}}">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">
                            {{ trans('cruds.permission.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.show') }} {{ trans('cruds.permission.title') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.permission.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $permission->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.permission.fields.title') }}
                                        </th>
                                        <td>
                                            {{ $permission->title }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>

                        <nav class="mb-3">
                            <div class="nav nav-tabs">

                            </div>
                        </nav>
                        <div class="tab-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection