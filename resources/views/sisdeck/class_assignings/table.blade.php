<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_classassignings-table">
        <thead>
            <tr>
                <th>Course Id</th>
                <th>Level Id</th>
                <th>Shift Id</th>
                <th>Classroom Id</th>
                <th>Batch Id</th>
                <th>Day Id</th>
                <th>Time Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClassAssignings as $sisdeckClassAssigning)
            <tr>
                <td>{{ $sisdeckClassAssigning->course_id }}</td>
                <td>{{ $sisdeckClassAssigning->level_id }}</td>
                <td>{{ $sisdeckClassAssigning->shift_id }}</td>
                <td>{{ $sisdeckClassAssigning->classroom_id }}</td>
                <td>{{ $sisdeckClassAssigning->batch_id }}</td>
                <td>{{ $sisdeckClassAssigning->day_id }}</td>
                <td>{{ $sisdeckClassAssigning->time_id }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.class_assignings.destroy', $sisdeckClassAssigning->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.class_assignings.show', [$sisdeckClassAssigning->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.class_assignings.edit', [$sisdeckClassAssigning->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
