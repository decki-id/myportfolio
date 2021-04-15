<div class="table-responsive">
    <table class="table" id="dhs_classrooms-table">
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
            @foreach($sisdeckClassrooms as $classroom)
            <tr>
                <td>{{ $classroom->name }}</td>
                <td>{{ $classroom->code }}</td>
                <td>{{ $classroom->description }}</td>
                <td>{{ $classroom->status }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.classrooms.destroy', $classroom->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.classrooms.show', [$classroom->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.classrooms.edit', [$classroom->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
