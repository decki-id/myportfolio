<div class="modal fade left" id="add-role_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hiden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191, 'autofocus']) !!}
                    </div>
                </div>
                <!-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('sisdeck.roles.index') }}" class="btn btn-default">Cancel</a> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>