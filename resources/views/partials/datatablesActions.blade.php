@can($viewGate)
    <a href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}" class="m-r-15 text-muted" data-toggle="tooltip" title="Exibir"><i class="icofont icofont-eye-alt"></i></a>
@endcan
@can($editGate)
    <a href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="Editar"><i class="icofont icofont-ui-edit"></i></a>
@endcan
@can($deleteGate)
    <a href="javascript:void(0);" onclick="deleteData({{$row->id}})"
        class="text-muted alert-success-cancel" data-toggle="tooltip" data-placement="top" title="Deletar">
        <i class="icofont icofont-delete-alt"></i></a>
@endcan