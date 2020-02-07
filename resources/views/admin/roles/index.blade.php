@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-user-suited bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('cruds.role.title') }}</h4>
                        <span>Lista de usuários cadastrados no sistema</span>
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
                        <li class="breadcrumb-item"><a href="#!">{{ trans('cruds.role.title') }}</a>
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
                        <div class="row">
                            <div class="col-md-12 pull-right">
                                @can('role_create')
                                    <div  class="row">
                                        <div class="col-lg-12 text-right">
                                            <a class="btn btn-sm btn-success" href="{{ route("admin.roles.create") }}">
                                                {{ trans('global.add') }} {{ trans('cruds.role.title_singular') }}
                                            </a>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover datatable datatable-Role">
                                <thead>
                                    <tr>
                                        <th width="10">
                
                                        </th>
                                        <th>
                                            {{ trans('cruds.role.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.role.fields.title') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.role.fields.permissions') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $key => $role)
                                        <tr data-entry-id="{{ $role->id }}">
                                            <td>
                
                                            </td>
                                            <td>
                                                {{ $role->id ?? '' }}
                                            </td>
                                            <td>
                                                {{ $role->title ?? '' }}
                                            </td>
                                            <td>
                                                @foreach($role->permissions as $key => $item)
                                                    <span class="badge badge-info">{{ $item->title }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @can('role_show')
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.roles.show', $role->id) }}">
                                                        {{ trans('global.view') }}
                                                    </a>
                                                @endcan
                
                                                @can('role_edit')
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.roles.edit', $role->id) }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                @endcan
                
                                                @can('role_delete')
                                                <a href="javascript:void(0);" onclick="deleteData({{$role->id}})"
                                                    class="text-muted alert-success-cancel">
                                                    <i class="icofont icofont-delete-alt"></i></a>
                                                    {{-- <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                    </form> --}}
                                                @endcan
                
                                            </td>
                
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('role_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.roles.massDestroy') }}",
    className: 'btn-default btn-xs',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Role:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

    function deleteData($id){
        var id = $id
        console.log(id)
        var data_table = $('#dataTables-example').DataTable();
        var url = '{{ route("admin.roles.destroy", ":id") }}';
        url = url.replace(':id', id);
        console.log(url)
        var removeClass = '#row-id-'+id
        swal({
            title: "CONFIRMAÇÃO",
            text: "Você tem certeza que deseja excluir?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sim, deletar!",
            cancelButtonText: "Não, cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                axios.delete(url)
                    .then(function (response) {
                        // handle success
                        console.log(response);
                        $(removeClass).remove();
                        swal("Deletado!", "Cliente excluído com sucesso.", "success");
                        // location.reload();
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        swal("Error", "Error :)", "error");
                    })
                    .finally(function () {
                        // always executed
                    });
            } else {
                swal("Cancelado", "Seu cliente está a salvo :)", "error");
            }
        });
    }
</script>
@endsection