<div class="table-responsive">
    <table class="table" id="dhs_courses-table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Code</th>
                <th class="text-center">Description</th>
                <th class="text-center">Status</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckCourses as $sisdeckCourse)
            <tr>
                <td>{{ $sisdeckCourse->name }}</td>
                <td>{{ $sisdeckCourse->code }}</td>
                <td>{{ $sisdeckCourse->description }}</td>
                <td>{{ $sisdeckCourse->status }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.courses.destroy', $sisdeckCourse->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.courses.show', [$sisdeckCourse->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye-open"></i></a>
                        <a href="{{ route('sisdeck.courses.edit', [$sisdeckCourse->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
