@can('projects-store')
    <a onclick="openModal({{ $row->getKey() }})" type="button" class="btn btn-icon btn-success btn-sm text-white">
        <i class="la la-edit"></i>
    </a>
@endcan


@can('projects-delete')
    <a type="button" onclick="deleteItem({{ $row->getKey() }})" class="btn btn-icon btn-danger btn-sm text-white">
        <i class="la la-trash"></i>
    </a>
@endcan
