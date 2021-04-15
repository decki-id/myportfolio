<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role Id:') !!}
    <p>{{ $sisdeckUser->role_id }}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $sisdeckUser->username }}</p>
</div>

<!-- Fullname Field -->
<div class="form-group">
    {!! Form::label('fullname', 'Fullname:') !!}
    <p>{{ $sisdeckUser->fullname }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $sisdeckUser->email }}</p>
</div>