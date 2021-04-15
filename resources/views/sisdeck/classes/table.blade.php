<div class="table-responsive">
    <table class="table" id="dhs_classes-table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Code</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClasses as $class)
            <tr>
                <td>{{ $class->name }}</td>
                <td>{{ $class->code }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.classes.destroy', $class->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.classes.show', [$class->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.classes.edit', [$class->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
