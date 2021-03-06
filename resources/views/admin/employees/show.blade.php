@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-users-social bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.show') }} {{ trans('cruds.employee.title') }}</h4>
                        <span>Detalhes do funcionário no sistema</span>
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
                        <li class="breadcrumb-item"><a href="{{route('admin.employees.index')}}">
                            {{ trans('cruds.employee.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.show') }} {{ trans('cruds.employee.title') }}</a>
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
                                            {{ trans('cruds.employee.fields.photo') }}
                                        </th>
                                        <td>
                                            @if($employee->photo)
                                                <a href="{{ $employee->photo->getUrl() }}" target="_blank">
                                                    <img src="{{ $employee->photo->getUrl('thumb') }}" width="50px" height="50px">
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $employee->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $employee->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $employee->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $employee->phone }}
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th>
                                            Services
                                        </th>
                                        <td>
                                            @foreach($employee->services as $id => $services)
                                                <span class="label label-info label-many">{{ $services->name }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.genre') }}
                                        </th>
                                        <td>
                                            {{ $employee->genre }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.birth_date') }}
                                        </th>
                                        <td>
                                            {{ $employee->birth_date }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.address') }}
                                        </th>
                                        <td>
                                            {{ $employee->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.number') }}
                                        </th>
                                        <td>
                                            {{ $employee->number }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.neighborhood') }}
                                        </th>
                                        <td>
                                            {{ $employee->neighborhood }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.city') }}
                                        </th>
                                        <td>
                                            {{ $employee->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.employee.fields.county') }}
                                        </th>
                                        <td>
                                            {{ $employee->county }}
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