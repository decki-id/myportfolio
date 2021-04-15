<div class="table-responsive">
    <table class="table" id="sisdeckClassSchedulings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sisdeckClassSchedulings as $sisdeckClassScheduling)
            <tr>
                <td>{{ $sisdeckClassScheduling->course_id }}</td>
            <td>{{ $sisdeckClassScheduling->level_id }}</td>
            <td>{{ $sisdeckClassScheduling->shift_id }}</td>
            <td>{{ $sisdeckClassScheduling->classroom_id }}</td>
            <td>{{ $sisdeckClassScheduling->batch_id }}</td>
            <td>{{ $sisdeckClassScheduling->day_id }}</td>
            <td>{{ $sisdeckClassScheduling->time_id }}</td>
            <td>{{ $sisdeckClassScheduling->teacher_id }}</td>
            <td>{{ $sisdeckClassScheduling->start_time }}</td>
            <td>{{ $sisdeckClassScheduling->end_time }}</td>
            <td>{{ $sisdeckClassScheduling->status }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeckClassSchedulings.destroy', $sisdeckClassScheduling->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeckClassSchedulings.show', [$sisdeckClassScheduling->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sisdeckClassSchedulings.edit', [$sisdeckClassScheduling->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
