<!-- Create User Modal -->
<div class="modal fade" id="create-user_modal" tabindex="-1" role="dialog" aria-labelledby="createUserHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createUserHeaderModal">Create User</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.roles.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 191, 'id' => 'user-username_create', 'placeholder' => 'Insert username']) !!}
                    </div>
                    <div class="form-group col-sm-3">
                        {!! Form::label('fullname', 'Fullname', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::text('fullname', null, ['class' => 'form-control','maxlength' => 191, 'placeholder' => 'Insert fullname']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('role_name', 'Role', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::number('role_name', null, ['class' => 'form-control', 'maxlength' => 191, 'placeholder' => 'Insert role']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 191, 'placeholder' => 'Insert email address']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('password', 'Password', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::password('password', ['class' => 'form-control','maxlength' => 191, 'placeholder' => 'Insert password']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('password_validation', 'Confirm Password', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::password('password_validation', ['class' => 'form-control','maxlength' => 191]) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create User Modal -->