<div class="table-responsive">
    <table class="table" id="sisdeckTeachers-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Sub District</th>
        <th>District</th>
        <th>Province</th>
        <th>Nationality</th>
        <th>Post Code</th>
        <th>Status</th>
        <th>Date Registered</th>
        <th>User Id</th>
        <th>Semester Id</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sisdeckTeachers as $sisdeckTeacher)
            <tr>
                <td>{{ $sisdeckTeacher->first_name }}</td>
            <td>{{ $sisdeckTeacher->last_name }}</td>
            <td>{{ $sisdeckTeacher->birthdate }}</td>
            <td>{{ $sisdeckTeacher->gender }}</td>
            <td>{{ $sisdeckTeacher->phone }}</td>
            <td>{{ $sisdeckTeacher->email }}</td>
            <td>{{ $sisdeckTeacher->address }}</td>
            <td>{{ $sisdeckTeacher->sub_district }}</td>
            <td>{{ $sisdeckTeacher->district }}</td>
            <td>{{ $sisdeckTeacher->province }}</td>
            <td>{{ $sisdeckTeacher->nationality }}</td>
            <td>{{ $sisdeckTeacher->post_code }}</td>
            <td>{{ $sisdeckTeacher->status }}</td>
            <td>{{ $sisdeckTeacher->date_registered }}</td>
            <td>{{ $sisdeckTeacher->user_id }}</td>
            <td>{{ $sisdeckTeacher->semester_id }}</td>
            <td>{{ $sisdeckTeacher->image }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeckTeachers.destroy', $sisdeckTeacher->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeckTeachers.show', [$sisdeckTeacher->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sisdeckTeachers.edit', [$sisdeckTeacher->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
