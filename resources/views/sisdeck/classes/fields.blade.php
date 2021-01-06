<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Class Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('code', 'Class Code') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.classes.index') }}" class="btn btn-default">Cancel</a>