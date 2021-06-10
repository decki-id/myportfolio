<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_users-table">
        <thead>
            <tr>
                <th class="text-center">User ID</th>
                <th class="text-center">Role ID</th>
                <th>Username or First Name</th>
                <th>Fullname or Last Name</th>
                <th>Email</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckUsers as $sisdeckUser)
            <tr>
                <td class="text-center">{{ $sisdeckUser->id }}</td>
                <td class="text-center">{{ $sisdeckUser->role_id }}</td>
                <td>{{ $sisdeckUser->username }}</td>
                <td>{{ $sisdeckUser->fullname }}</td>
                <td>{{ $sisdeckUser->email }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['sisdeck.users.destroy', $sisdeckUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.users.show', [$sisdeckUser->id]) }}" title="Detail" class='btn btn-primary btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.users.edit', [$sisdeckUser->id]) }}" title="Update" class='btn btn-success btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
