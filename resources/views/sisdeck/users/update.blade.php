<!-- Update User Modal -->
<div class="modal fade" id="update-user_modal" tabindex="-1" role="dialog" aria-labelledby="updateUserHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateUserHeaderModal">Update User</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.users.update', 'id'], 'method' => 'post']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('id', null, ['id' => 'id']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'username-update', 'title' => 'Username', 'placeholder' => 'Insert username']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('fullname', 'Fullname', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::text('fullname', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'fullname-update', 'title' => 'Fullname', 'placeholder' => 'Insert fullname']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('role_name', 'Role', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::text('role_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role-update', 'title' => 'Role', 'placeholder' => 'Insert role']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-3">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-9">
                        {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'email-update', 'title' => 'Email', 'placeholder' => 'Insert email']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update User Modal -->