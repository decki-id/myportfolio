<div class="table-responsive">
    <table class="table table-bordered" id="dhs_classes-table">
        <thead>
            <tr>
                <th class="text-center">Class Code</th>
                <th>Class Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClasses as $class)
            <tr>
                <td class="text-center">{{ $class->class_code }}</td>
                <td>{{ $class->class_name }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-class_code="{{ $class->class_code }}" data-class_name="{{ $class->class_name }}" data-toggle="modal"
                           data-target="#update-class_modal" title="Update" class='btn btn-warning text-white btn-xs'><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.classes.destroy', $class->class_id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
