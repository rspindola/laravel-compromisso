@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-users-alt-5 bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}</h4>
                        <span>Formulário de criação de usuários no sistema</span>
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
                        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">
                            {{ trans('cruds.user.title') }}
                        </a></li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}</a>
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
                        <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? '' : '' }}">
                                        <label for="name">{{ trans('cruds.user.fields.name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                        @if($errors->has('name'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.user.fields.name_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('email') ? '' : '' }}">
                                        <label for="email">{{ trans('cruds.user.fields.email') }}</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                                        @if($errors->has('email'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.user.fields.email_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('password') ? '' : '' }}">
                                        <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                                        <input type="password" id="password" name="password" class="form-control" required>
                                        @if($errors->has('password'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.user.fields.password_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('password_confirmation') ? '' : '' }}">
                                        <label for="password">{{ trans('cruds.user.fields.password_confirmation') }}</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                                        @if($errors->has('password_confirmation'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('password_confirmation') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.user.fields.password_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('roles') ? '' : '' }}">
                                        <label for="roles">{{ trans('cruds.user.fields.roles') }}
                                            <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                            <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                        <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                                            @foreach($roles as $id => $roles)
                                                <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('roles'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('roles') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.user.fields.roles_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 text-center">
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