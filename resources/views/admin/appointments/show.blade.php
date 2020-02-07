@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="page-header-title">
                    <i class="icofont icofont icofont icofont icofont-ui-clock bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.show') }} {{ trans('cruds.appointment.title') }}</h4>
                        <span>Detalhes de compromissos cadastrados no sistema</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.home')}}">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.appointments.index')}}">
                            {{ trans('cruds.appointment.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.show') }} {{ trans('cruds.appointment.title') }}</a>
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
                        <a class="btn btn-info btn-sm float-right" href="{{ route('admin.appointments.sendNotification',$appointment)}}">
                            {{ trans('global.change_notifications_field_1_label') }}
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="mb-2">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $appointment->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.client') }}
                                        </th>
                                        <td>
                                            {{ $appointment->client->name ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.employee') }}
                                        </th>
                                        <td>
                                            {{ $appointment->employee->name ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.start_time') }}
                                        </th>
                                        <td>
                                            {{ \Carbon\Carbon::parse($appointment->start_time)->format('d/m/Y H:i') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.finish_time') }}
                                        </th>
                                        <td>
                                            {{ \Carbon\Carbon::parse($appointment->finish_time)->format('d/m/Y H:i') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.price') }}
                                        </th>
                                        <td>
                                            ${{ $appointment->price }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.appointment.fields.comments') }}
                                        </th>
                                        <td>
                                            {!! $appointment->comments !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Services
                                        </th>
                                        <td>
                                            @foreach($appointment->services as $id => $services)
                                                <span class="label label-info label-many">{{ $services->name }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection