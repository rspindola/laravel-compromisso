@extends('layouts.admin')
@section('content')
<div class="page-wrapper">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                    <div class="d-inline">
                        <h4>{{ trans('cruds.permission.title') }}</h4>
                        <span>Lista de permissões cadastrados no sistema</span>
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
                        <li class="breadcrumb-item"><a href="#!">{{ trans('cruds.permission.title') }}</a>
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
                                {{ trans('cruds.permission.title_singular') }} {{ trans('global.list') }}
                            </div>
                            <div class="col-md-8 pull-right">
                                @can('permission_create')
                                    <div style="margin-bottom: 10px;" class="row">
                                        <div class="col-lg-12 text-right">
                                            <a class="btn btn-sm btn-success" href="{{ route("admin.permissions.create") }}">
                                                {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
                                            </a>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
                                <thead>
                                    <tr>
                                        <th width="10">
                
                                        </th>
                                        <th>
                                            {{ trans('cruds.permission.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.permission.fields.title') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $key => $permission)
                                        <tr data-entry-id="{{ $permission->id }}">
                                            <td>
                
                                            </td>
                                            <td>
                                                {{ $permission->id ?? '' }}
                                            </td>
                                            <td>
                                                {{ $permission->title ?? '' }}
                                            </td>
                                            <td>
                                                @can('permission_show')
                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.permissions.show', $permission->id) }}">
                                                        {{ trans('global.view') }}
                                                    </a>
                                                @endcan
                
                                                @can('permission_edit')
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.permissions.edit', $permission->id) }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                @endcan
                
                                                @can('permission_delete')
                                                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                    </form>
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
@can('permission_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.permissions.massDestroy') }}",
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
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  $('.datatable-Permission:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection