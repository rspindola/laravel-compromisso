@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-users-alt-1 bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}</h4>
                        <span>Formulário de criação de clientes no sistema</span>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">{{ trans('cruds.client.fields.name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($client) ? $client->name : '') }}" required>
                                        @if($errors->has('name'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.name_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('genre') ? 'has-error' : '' }}">
                                        <label for="genre">{{ trans('cruds.client.fields.genre') }}</label>
                                        <input type="text" id="genre" name="genre" class="form-control" value="{{ old('genre', isset($client) ? $client->genre : '') }}">
                                        @if($errors->has('genre'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('genre') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.genre_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                                        <label for="birth_date">{{ trans('cruds.client.fields.birth_date') }}</label>
                                        <input type="text" id="birth_date" name="birth_date" class="form-control" value="{{ old('birth_date', isset($client) ? $client->birth_date : '') }}">
                                        @if($errors->has('birth_date'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('birth_date') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.birth_date_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                                        <label for="zipcode">{{ trans('cruds.client.fields.zipcode') }}</label>
                                        <input type="text" id="zipcode" name="zipcode" class="form-control" value="{{ old('zipcode', isset($client) ? $client->zipcode : '') }}">
                                        @if($errors->has('zipcode'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('zipcode') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.zipcode_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                        <label for="address">{{ trans('cruds.client.fields.address') }}</label>
                                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($client) ? $client->address : '') }}">
                                        @if($errors->has('address'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                                {{ trans('cruds.client.fields.address_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
                                        <label for="number">{{ trans('cruds.client.fields.number') }}</label>
                                        <input type="text" id="number" name="number" class="form-control" value="{{ old('number', isset($client) ? $client->number : '') }}">
                                        @if($errors->has('number'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('number') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.number_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('neighborhood') ? 'has-error' : '' }}">
                                        <label for="neighborhood">{{ trans('cruds.client.fields.neighborhood') }}</label>
                                        <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ old('neighborhood', isset($client) ? $client->neighborhood : '') }}">
                                        @if($errors->has('neighborhood'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('neighborhood') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.neighborhood_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                        <label for="city">{{ trans('cruds.client.fields.city') }}</label>
                                        <input type="text" id="city" name="city" class="form-control" value="{{ old('city', isset($client) ? $client->city : '') }}">
                                        @if($errors->has('city'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('city') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.city_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                                        <label for="state">{{ trans('cruds.client.fields.state') }}</label>
                                        <select name="state" id="state" class="form-control">
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group {{ $errors->has('county') ? 'has-error' : '' }}">
                                        <label for="county">{{ trans('cruds.client.fields.country') }}</label>
                                        <input type="text" id="county" name="county" class="form-control" value="{{ old('county', isset($client) ? $client->county : '') }}">
                                        @if($errors->has('county'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('county') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.client.fields.country_helper') }}
                                        </p>
                                    </div>
                                </div>
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