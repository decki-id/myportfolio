<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_roles-table">
        <thead>
            <tr>
                <th class="text-center">Role ID</th>
                <th>Role Name</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckRoles as $sisdeckRole)
            <tr>
                <td class="text-center">{{ $sisdeckRole->id }}</td>
                <td>{{ $sisdeckRole->name }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['sisdeck.roles.destroy', $sisdeckRole->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.roles.show', [$sisdeckRole->id]) }}" title="Detail" class='btn btn-primary btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.roles.edit', [$sisdeckRole->id]) }}" title="Update" class='btn btn-success btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
