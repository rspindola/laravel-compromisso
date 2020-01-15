@extends('layouts.admin')
@section('content')
<div class="page-wrapper">                           
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                    <div class="d-inline">
                        <h4>{{ trans('cruds.appointment.title') }}</h4>
                        <span>Lista de horários cadastrados no sistema</span>
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
                        <li class="breadcrumb-item"><a href="#!">{{ trans('cruds.appointment.title') }}</a></li>
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
                                {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }}
                            </div>
                            <div class="col-md-8 pull-right">
                                @can('appointment_create')
                                    <div style="margin-bottom: 10px;" class="row">
                                        <div class="col-lg-12 text-right">
                                            <a class="btn btn-sm btn-success" href="{{ route("admin.appointments.create") }}">
                                                {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
                                            </a>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Appointment">
                            <thead>
                                <tr>
                                    <th width="10">
                
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.client') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.employee') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.start_time') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.finish_time') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.price') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.comments') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.appointment.fields.services') }}
                                    </th>
                                    <th>
                                        {{ trans('global.action') }}
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
    @can('appointment_delete')
    let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
    let deleteButton = {
        text: deleteButtonTrans,
        url: "{{ route('admin.appointments.massDestroy') }}",
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
        ajax: "{{ route('admin.appointments.index') }}",
        columns: [
            { data: 'placeholder', name: 'placeholder' },
            { data: 'id', name: 'id' },
            { data: 'client_name', name: 'client.name' },
            { data: 'employee_name', name: 'employee.name' },
            { data: 'start_time', name: 'start_time' },
            { data: 'finish_time', name: 'finish_time' },
            { data: 'price', name: 'price' },
            { data: 'comments', name: 'comments' },
            { data: 'services', name: 'services.name' },
            { data: 'actions', name: '{{ trans('global.actions') }}' }
        ],
        order: [[ 1, 'asc' ]],
        pageLength: 100,
    };
    $('.datatable-Appointment').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

function teste($id){
    alert('teste')
    var id = $id
    var data_table = $('#dataTables-example').DataTable();
    var url = '{{ route("admin.appointments.destroy", ":id") }}';
    url = url.replace(':id', id);
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
            console.log('axios')
            axios.delete(url)
                .then(function (response) {
                    // handle success
                    console.log(response);
                    $(removeClass).remove();
                    swal("Deletado!", "Conversão excluída com sucesso.", "success");
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
            swal("Cancelado", "Sua conversão está a salvo :)", "error");
        }
    });
}
</script>
@endsection