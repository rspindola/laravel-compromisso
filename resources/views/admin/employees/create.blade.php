@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-users-social bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}</h4>
                        <span>Formulário de criação de funcionários no sistema</span>
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
                        <li class="breadcrumb-item"><a href="#!">{{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}</a>
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
                        <form action="{{ route("admin.employees.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                        <label for="photo">{{ trans('cruds.employee.fields.photo') }}</label>
                                        <div class="needsclick dropzone" id="photo-dropzone">
        
                                        </div>
                                        @if($errors->has('photo'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('photo') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.photo_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">{{ trans('cruds.employee.fields.name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($employee) ? $employee->name : '') }}" required>
                                        @if($errors->has('name'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.name_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email">{{ trans('cruds.employee.fields.email') }}</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($employee) ? $employee->email : '') }}">
                                        @if($errors->has('email'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.email_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <label for="phone">{{ trans('cruds.employee.fields.phone') }}</label>
                                        <input type="text" id="phone" name="phone" class="form-control phone" value="{{ old('phone', isset($employee) ? $employee->phone : '') }}">
                                        @if($errors->has('phone'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('phone') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.phone_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('genre') ? 'has-error' : '' }}">
                                        <label for="genre">{{ trans('cruds.employee.fields.genre') }}</label>
                                        <input type="text" id="genre" name="genre" class="form-control" value="{{ old('genre', isset($employee) ? $employee->genre : '') }}">
                                        @if($errors->has('genre'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('genre') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.genre_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                                        <label for="birth_date">{{ trans('cruds.employee.fields.birth_date') }}</label>
                                        <input type="text" id="birth_date" name="birth_date" class="form-control" value="{{ old('birth_date', isset($employee) ? $employee->birth_date : '') }}">
                                        @if($errors->has('birth_date'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('birth_date') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.birth_date_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
                                <label for="services">{{ trans('cruds.employee.fields.services') }}
                                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                <select name="services[]" id="services" class="form-control select2" multiple="multiple">
                                    @foreach($services as $id => $services)
                                        <option value="{{ $id }}" {{ (in_array($id, old('services', [])) || isset($employee) && $employee->services->contains($id)) ? 'selected' : '' }}>{{ $services }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('services'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('services') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.employee.fields.services_helper') }}
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                                        <label for="zipcode">{{ trans('cruds.employee.fields.zipcode') }}</label>
                                        <input type="text" id="zipcode" name="zipcode" class="form-control" value="{{ old('zipcode', isset($employee) ? $employee->zipcode : '') }}">
                                        @if($errors->has('zipcode'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('zipcode') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.zipcode_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                        <label for="address">{{ trans('cruds.employee.fields.address') }}</label>
                                        <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($employee) ? $employee->address : '') }}">
                                        @if($errors->has('address'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                                {{ trans('cruds.employee.fields.address_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
                                        <label for="number">{{ trans('cruds.employee.fields.number') }}</label>
                                        <input type="text" id="number" name="number" class="form-control" value="{{ old('number', isset($employee) ? $employee->number : '') }}">
                                        @if($errors->has('number'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('number') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.number_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('neighborhood') ? 'has-error' : '' }}">
                                        <label for="neighborhood">{{ trans('cruds.employee.fields.neighborhood') }}</label>
                                        <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ old('neighborhood', isset($employee) ? $employee->neighborhood : '') }}">
                                        @if($errors->has('neighborhood'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('neighborhood') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.neighborhood_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                        <label for="city">{{ trans('cruds.employee.fields.city') }}</label>
                                        <input type="text" id="city" name="city" class="form-control" value="{{ old('city', isset($employee) ? $employee->city : '') }}">
                                        @if($errors->has('city'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('city') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.city_helper') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                                        <label for="state">{{ trans('cruds.employee.fields.state') }}</label>
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
                                        <label for="county">{{ trans('cruds.employee.fields.country') }}</label>
                                        <input type="text" id="county" name="county" class="form-control" value="{{ old('county', isset($employee) ? $employee->county : '') }}">
                                        @if($errors->has('county'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('county') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.employee.fields.country_helper') }}
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
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.employees.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employee) && $employee->photo)
      var file = {!! json_encode($employee->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop