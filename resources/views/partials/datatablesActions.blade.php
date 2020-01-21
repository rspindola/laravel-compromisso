@can($viewGate)
    <a href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}"class="m-r-15 text-muted" title="Ver" data-original-title="Ver"><i class="icofont icofont-ui-folder"></i></a>
@endcan
@can($editGate)
    <a href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}" class="m-r-15 text-muted" title="Editar" data-original-title="Editar"><i class="icofont icofont-ui-edit"></i></a>
@endcan
@can($deleteGate)
    <a href="javascript:void(0);" onclick="deleteData({{$row->id}})"
        class="text-muted alert-success-cancel">
        <i class="icofont icofont-delete-alt"></i></a>


    {{-- <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;" data-id="{{$dataId}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
    </form> --}}
@endcan