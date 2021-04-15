<div class="table-responsive">
    <table class="table text-center" id="dhs_users-table">
        <thead>
            <tr>
                <th>Role Id</th>
                <th>Username or First Name</th>
                <th>Fullname or Last Name</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckUsers as $sisdeckUser)
            <tr>
                <td>{{ $sisdeckUser->role_id }}</td>
                <td>{{ $sisdeckUser->username }}</td>
                <td>{{ $sisdeckUser->fullname }}</td>
                <td>{{ $sisdeckUser->email }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.users.destroy', $sisdeckUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.users.show', [$sisdeckUser->id]) }}" class='btn btn-default btn-xs disabled'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.users.edit', [$sisdeckUser->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
