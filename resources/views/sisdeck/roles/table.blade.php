<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_roles-table">
        <thead class="text-center">
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckRoles as $sisdeckRole)
            <tr>
                <td>{{ $sisdeckRole->name }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['sisdeck.roles.destroy', $sisdeckRole->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.roles.show', [$sisdeckRole->id]) }}" class='btn btn-default btn-xs disabled'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.roles.edit', [$sisdeckRole->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
