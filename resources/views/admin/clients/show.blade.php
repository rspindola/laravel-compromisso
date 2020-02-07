@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-users-alt-1 bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.show') }} {{ trans('cruds.client.title_singular') }}</h4>
                        <span>Detalhes de clientes cadastrados no sistema</span>
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
                        <li class="breadcrumb-item"><a href="{{route('admin.clients.index')}}">
                            {{ trans('cruds.client.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.show') }} {{ trans('cruds.client.title_singular') }}</a>
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
                    <div class="card-header">
                        {{ trans('global.show') }} {{ trans('cruds.client.title') }}
                    </div>

                    <div class="card-body">
                        <div class="mb-2">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.client.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $client->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.client.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $client->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.client.fields.phone') }}
                                        </th>
                                        <td>
                                            {{ $client->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.client.fields.email') }}
                                        </th>
                                        <td>
                                            {{ $client->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            genero
                                        </th>
                                        <td>
                                            {{ $client->genre }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            nascimento
                                        </th>
                                        <td>
                                            {{ \Carbon\Carbon::parse($client->birth_date)->format('d/m/Y') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            endereco
                                        </th>
                                        <td>
                                            {{ $client->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            numero
                                        </th>
                                        <td>
                                            {{ $client->number }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            bairro
                                        </th>
                                        <td>
                                            {{ $client->neighborhood }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            cidade
                                        </th>
                                        <td>
                                            {{ $client->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            pais
                                        </th>
                                        <td>
                                            {{ $client->county }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Cliente desde:
                                        </th>
                                        <td>
                                            {{ \Carbon\Carbon::parse($client->created_at)->format('d/m/Y H:i') }}
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