<div class="row">
    <div class="form-group col">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.days.index') }}" class="btn btn-default">Cancel</a>
