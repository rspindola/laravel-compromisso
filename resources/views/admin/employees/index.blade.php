@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-users-social bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>{{ trans('cruds.employee.title') }}</h4>
                        <span>Lista de funcionários cadastrados no sistema</span>
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
                        <li class="breadcrumb-item"><a href="#!">{{ trans('cruds.employee.title') }}</a>
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
                            <div class="col-md-4">
                                {{ trans('cruds.employee.title_singular') }} {{ trans('global.list') }}
                            </div>
                            <div class="col-md-8 pull-right">
                            @can('employee_create')
                                <div style="margin-bottom: 10px;" class="row">
                                    <div class="col-lg-12 text-right">
                                        <a class="btn btn-sm btn-success" href="{{ route("admin.employees.create") }}">
                                            {{ trans('global.add') }} {{ trans('cruds.employee.title_singular') }}
                                        </a>
                                    </div>
                                </div>
                            @endcan
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Employee">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.employee.fields.photo') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.employee.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.employee.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.employee.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.employee.fields.services') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                        </table>


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
@can('employee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employees.massDestroy') }}",
    className: 'btn-default btn-xs',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.employees.index') }}",
    columns: [
        { data: 'placeholder', name: 'placeholder' },
        { data: 'photo', name: 'photo', sortable: false, searchable: false },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'phone', name: 'phone' },
        { data: 'services', name: 'services.name' },
        { data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  };
  $('.datatable-Employee').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});
function deleteData($id){
    var id = $id
    console.log(id)
    var data_table = $('#dataTables-example').DataTable();
    var url = '{{ route("admin.employees.destroy", ":id") }}';
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