<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('course_id', 'Course Id') !!}
        {!! Form::number('course_id', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('level_id', 'Level Id') !!}
        {!! Form::number('level_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('shift_id', 'Shift Id') !!}
        {!! Form::number('shift_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('classroom_id', 'Classroom Id') !!}
        {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('batch_id', 'Batch Id') !!}
        {!! Form::number('batch_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('day_id', 'Day Id') !!}
        {!! Form::number('day_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('time_id', 'Time Id') !!}
        {!! Form::number('time_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('teacher_id', 'Teacher Id') !!}
        {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('start_time', 'Start Time') !!}
        {!! Form::text('start_time', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('end_time', 'End Time') !!}
        {!! Form::text('end_time', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6 mb-1">
        {!! Form::label('status', 'Status') !!}
        <label class="checkbox-inline">
            {!! Form::hidden('status', 0) !!}
            {!! Form::checkbox('status', '1', null) !!}
        </label>
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.class_schedulings.index') }}" class="btn btn-default">Cancel</a>