<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_academics-table">
        <thead>
            <tr>
                <th class="text-center">Academic Year</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sisdeckAcademics as $sisdeckAcademic)
        <tr>
            <td>{{ $sisdeckAcademic->academic_year }}</td>
            <td>
                {!! Form::open(['route' => ['sisdeck.academics.destroy', $sisdeckAcademic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('sisdeck.academics.show', [$sisdeckAcademic->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                    <a href="{{ route('sisdeck.academics.edit', [$sisdeckAcademic->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                    {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
