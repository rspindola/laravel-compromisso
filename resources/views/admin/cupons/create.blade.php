@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-tags bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.create') }} {{ trans('cruds.cupon.title_singular') }}</h4>
                        <span>Formulário de cadastro de cupons no sistema</span>
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
                        <li class="breadcrumb-item"><a href="{{route('admin.cupons.index')}}">
                            {{ trans('cruds.cupon.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.create') }} {{ trans('cruds.cupon.title_singular') }}</a>
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
                        <form action="{{ route("admin.cupons.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.cupon.fields.name') }}*</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($service) ? $service->name : '') }}" required>
                                @if($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.cupon.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('discount') ? 'has-error' : '' }}">
                                <label for="discount">{{ trans('cruds.cupon.fields.discount') }}</label>
                                <input type="number" id="discount" name="discount" class="form-control money" value="{{ old('discount', isset($service) ? $service->discount : '') }}" maxlength="3" max="100">
                                @if($errors->has('discount'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('discount') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.cupon.fields.discount_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('validity') ? 'has-error' : '' }}">
                                <label for="validity">{{ trans('cruds.cupon.fields.validity') }}*</label>
                                <input type="date" id="validity" name="validity" class="form-control" value="{{ old('validity', isset($cupon) ? $cupon->validity : '') }}" required>
                                @if($errors->has('validity'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('validity') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.cupon.fields.validity_helper') }}
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