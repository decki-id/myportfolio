<div class="row">
    <div class="form-group col">
        {!! Form::label('batch', 'Batch') !!}
        {!! Form::text('batch', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.batches.index') }}" class="btn btn-default">Cancel</a>