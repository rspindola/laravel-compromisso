@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}</h4>
                        <span>Lista de empregados cadastrados no sistema</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}</a>
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
                        <form action="{{ route("admin.clients.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.client.fields.name') }}</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($client) ? $client->name : '') }}">
                                @if($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.client.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                <label for="phone">{{ trans('cruds.client.fields.phone') }}</label>
                                <input type="text" id="phone" name="phone" class="form-control phone" value="{{ old('phone', isset($client) ? $client->phone : '') }}">
                                @if($errors->has('phone'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.client.fields.phone_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">{{ trans('cruds.client.fields.email') }}</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($client) ? $client->email : '') }}">
                                @if($errors->has('email'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.client.fields.email_helper') }}
                                </p>
                            </div>

                            <div class="form-group {{ $errors->has('genre') ? 'has-error' : '' }}">
                                <label for="genre">genero</label>
                                <input type="text" id="genre" name="genre" class="form-control" value="{{ old('genre', isset($client) ? $client->genre : '') }}">
                                @if($errors->has('genre'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('genre') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    genero
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                                <label for="birth_date">nascimento</label>
                                <input type="text" id="birth_date" name="birth_date" class="form-control" value="{{ old('birth_date', isset($client) ? $client->birth_date : '') }}">
                                @if($errors->has('birth_date'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('birth_date') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    nascimento
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                <label for="address">endereco</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($client) ? $client->address : '') }}">
                                @if($errors->has('address'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('address') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    endereço
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
                                <label for="number">numero</label>
                                <input type="text" id="number" name="number" class="form-control" value="{{ old('number', isset($client) ? $client->number : '') }}">
                                @if($errors->has('number'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('number') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    numero
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('neighborhood') ? 'has-error' : '' }}">
                                <label for="neighborhood">bairro</label>
                                <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ old('neighborhood', isset($client) ? $client->neighborhood : '') }}">
                                @if($errors->has('neighborhood'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('neighborhood') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    bairro
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                <label for="city">cidade</label>
                                <input type="text" id="city" name="city" class="form-control" value="{{ old('city', isset($client) ? $client->city : '') }}">
                                @if($errors->has('city'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('city') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    cidade
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('county') ? 'has-error' : '' }}">
                                <label for="county">Pais</label>
                                <input type="text" id="county" name="county" class="form-control" value="{{ old('county', isset($client) ? $client->county : '') }}">
                                @if($errors->has('county'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('county') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    erro pais
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
            $('.phone').mask('(99) 99999-9999');
        });
    </script>
@endsection   