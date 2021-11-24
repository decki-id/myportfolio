<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_teachers-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckTeachers as $sisdeckTeacher)
            <tr>
                <td>{{ $sisdeckTeacher->first_name }} . " " . {{ $sisdeckTeacher->last_name }}</td>
                <td>{{ $sisdeckTeacher->phone }}</td>
                <td>{{ $sisdeckTeacher->email }}</td>
                <td>{{ $sisdeckTeacher->status }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-success btn-xs mr-1"><i class="fas fa-fw fa-eye"></i></a>
                        <a href="#" class="btn btn-warning btn-xs text-white mr-1"><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::open(['route' => ['sisdeck.teachers.destroy', $sisdeckTeacher->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>