<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_roles-table">
        <thead>
            <tr>
                <th class="text-center">Role ID</th>
                <th>Role Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckRoles as $sisdeckRole)
            <tr>
                <td class="text-center">{{ $sisdeckRole->id }}</td>
                <td>{{ $sisdeckRole->name }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.roles.edit', [$sisdeckRole->id]) }}" data-role_id="{{ $sisdeckRole->id }}"
                           data-role_name="{{ $sisdeckRole->name }}" data-toggle="modal" data-target="#update-role_modal" title="Update"
                           class="btn btn-warning btn-xs text-white update-role_button"><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.roles.destroy', $sisdeckRole->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $('#update-role_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                role_id = button.data('role_id'),
                role_name = button.data('role_name'),
                modal = $(this);
                
            modal.find('.modal-body #role-id_update').val(role_id);
            modal.find('.modal-body #role-name_update').val(role_name);

            setTimeout(function () {
                modal.find('.modal-body #role-name_update').focus();
            }, 100);
        });
    </script>
@endpush