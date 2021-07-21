<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_classschedules-table">
        <thead>
            <tr>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClassSchedules as $sisdeckClassSchedule)
            <tr>
                <td>{{ $sisdeckClassSchedule->start_time }}</td>
                <td>{{ $sisdeckClassSchedule->end_time }}</td>
                <td>{{ $sisdeckClassSchedule->status }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-user_id="{{ $sisdeckClassSchedule->id }}" data-username="{{ $sisdeckClassSchedule->username }}"
                           data-fullname="{{ $sisdeckClassSchedule->fullname }}" data-role_id="{{ $roleName }}" data-email="{{ $sisdeckClassSchedule->email }}"
                           data-toggle="modal" data-target="#read-user_modal" title="Detail" class="btn btn-success btn-xs mr-1">
                           <i class="fas fa-fw fa-eye"></i>
                        </a>
                        <a href="#" data-user_id="{{ $sisdeckClassSchedule->id }}" data-username="{{ $sisdeckClassSchedule->username }}"
                           data-fullname="{{ $sisdeckClassSchedule->fullname }}" data-role_id="{{ $sisdeckClassSchedule->role_id }}"
                           data-email="{{ $sisdeckClassSchedule->email }}"data-toggle="modal" data-target="#update-user_modal" title="Update"
                           class="btn btn-warning btn-xs text-white mr-1"><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.class_schedules.destroy', $sisdeckClassSchedule->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>