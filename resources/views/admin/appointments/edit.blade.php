@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="page-header-title">
                    <i
                        class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}</h4>
                        <span>Formulário de edição de compromisso no sistema</span>
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
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}</a>
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
                        <form action="{{ route("admin.appointments.update", [$appointment->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
                                <label for="client">{{ trans('cruds.appointment.fields.client') }}*</label>
                                <select name="client_id" id="client" class="form-control select2" required>
                                    @foreach($clients as $id => $client)
                                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->client ? $appointment->client->id : old('client_id')) == $id ? 'selected' : '' }}>{{ $client }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('client_id'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('client_id') }}
                                    </em>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('employee_id') ? 'has-error' : '' }}">
                                <label for="employee">{{ trans('cruds.appointment.fields.employee') }}</label>
                                <select name="employee_id" id="employee" class="form-control select2">
                                    @foreach($employees as $id => $employee)
                                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->employee ? $appointment->employee->id : old('employee_id')) == $id ? 'selected' : '' }}>{{ $employee }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('employee_id'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('employee_id') }}
                                    </em>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                                <label for="start_time">{{ trans('cruds.appointment.fields.start_time') }}*</label>
                                <input type="text" id="start_time" name="start_time" class="form-control datetime" value="{{ old('start_time', isset($appointment) ? $appointment->start_time : '') }}" required>
                                @if($errors->has('start_time'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('start_time') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.appointment.fields.start_time_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('finish_time') ? 'has-error' : '' }}">
                                <label for="finish_time">{{ trans('cruds.appointment.fields.finish_time') }}*</label>
                                <input type="text" id="finish_time" name="finish_time" class="form-control datetime" value="{{ old('finish_time', isset($appointment) ? $appointment->finish_time : '') }}" required>
                                @if($errors->has('finish_time'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('finish_time') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.appointment.fields.finish_time_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                <label for="price">{{ trans('cruds.appointment.fields.price') }}</label>
                                <input type="number" id="price" name="price" class="form-control money" value="{{ old('price', isset($appointment) ? $appointment->price : '') }}" maxlength="6">
                                @if($errors->has('price'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('price') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.appointment.fields.price_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
                                <label for="comments">{{ trans('cruds.appointment.fields.comments') }}</label>
                                <textarea id="comments" name="comments" class="form-control ">{{ old('comments', isset($appointment) ? $appointment->comments : '') }}</textarea>
                                @if($errors->has('comments'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('comments') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.appointment.fields.comments_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
                                <label for="services">{{ trans('cruds.appointment.fields.services') }}
                                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                <select name="services[]" id="services" class="form-control select2" multiple="multiple">
                                    @foreach($services as $id => $services)
                                        <option value="{{ $id }}" {{ (in_array($id, old('services', [])) || isset($appointment) && $appointment->services->contains($id)) ? 'selected' : '' }}>{{ $services }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('services'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('services') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.appointment.fields.services_helper') }}
                                </p>
                            </div>
                            <div>
                                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('bower_components/jquery-mask/dist/jquery.mask.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.money').mask('#.##0,00', {reverse: true});
        });
    </script>
@endsection