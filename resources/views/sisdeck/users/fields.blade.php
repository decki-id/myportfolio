<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('role_id', 'Role Id') !!}
        {!! Form::number('role_id', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('username', 'First Name') !!}
        {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('fullname', 'Middle and/or Last Name') !!}
        {!! Form::text('fullname', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.users.index') }}" class="btn btn-default">Cancel</a>