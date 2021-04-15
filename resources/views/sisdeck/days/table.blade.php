<div class="table-responsive">
    <table class="table" id="dhs_days-table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckDays as $sisdeckDay)
            <tr>
                <td>{{ $sisdeckDay->name }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.days.destroy', $sisdeckDay->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.days.show', [$sisdeckDay->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.days.edit', [$sisdeckDay->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
