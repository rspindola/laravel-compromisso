@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                        <i class="icofont icofont-repair bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.edit') }} {{ trans('cruds.service.title_singular') }}</h4>
                        <span>Formulário de edição de serviço no sistema</span>
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
                        <li class="breadcrumb-item"><a href="{{route('admin.services.index')}}">
                            {{ trans('cruds.service.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.edit') }} {{ trans('cruds.service.title_singular') }}</a></li>
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
                        <form action="{{ route("admin.services.update", [$service->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.service.fields.name') }}</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($service) ? $service->name : '') }}" required>
                                @if($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.service.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                <label for="price">{{ trans('cruds.service.fields.price') }}</label>
                                <input type="text" id="price" name="price" class="form-control money" value="{{ old('price', isset($service) ? $service->price : '') }}" maxlength="6" required>
                                @if($errors->has('price'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('price') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.service.fields.price_helper') }}
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