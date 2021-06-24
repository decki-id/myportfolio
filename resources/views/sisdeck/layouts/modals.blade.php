<!-- User Detail Modal -->
<div class="modal fade" id="read-user_modal" tabindex="-1" role="dialog" aria-labelledby="readUserHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white align-items-center">
                <h5 class="modal-title" id="readUserHeaderModal">User Detail</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">User ID</th>
                            <td id="user-id_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Username</th>
                            <td id="user-username_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Fullname</th>
                            <td id="user-fullname_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Role</th>
                            <td id="user-role_name_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td id="user-email_value"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
<!-- End of User Detail Modal -->

<!-- Update User Modal -->
<div class="modal fade" id="update-user_modal" tabindex="-1" role="dialog" aria-labelledby="updateUserHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateUserHeaderModal">Update User</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.users.update', 'id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('id', null, ['id' => 'id']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'username-update', 'title' => 'Username', 'placeholder' => 'Insert username']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('fullname', 'Fullname', ['class' => 'form-label']) !!}
                        {!! Form::text('fullname', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'fullname-update', 'title' => 'Fullname', 'placeholder' => 'Insert fullname']) !!}
                    </div>
                </div>
                @if(!empty($role))
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_id', 'Role', ['class' => 'form-label']) !!}
                        {!! Form::select('role_id', $role, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role-update', 'title' => 'User Role', 'placeholder' => 'Choose role']) !!}
                    </div>
                </div>
                @endif
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'email-update', 'title' => 'Email', 'placeholder' => 'Insert email']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update User Modal -->

<!-- Update Role Modal -->
<div class="modal fade" id="update-role_modal" tabindex="-1" role="dialog" aria-labelledby="updateRoleHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateRoleHeaderModal">Update Role</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.roles.update', 'role_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_id', 'Role ID', ['class' => 'form-label']) !!}
                        {!! Form::text('role_id', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role_id-update', 'title' => 'Role ID', 'placeholder' => 'Insert role id', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_name', 'Role Name', ['class' => 'form-label']) !!}
                        {!! Form::text('role_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role_name-update', 'title' => 'Role Name', 'placeholder' => 'Insert role name']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update Role Modal -->

<!-- Update Course Modal -->
<div class="modal fade" id="update-course_modal" tabindex="-1" role="dialog" aria-labelledby="updateCourseHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateCourseHeaderModal">Update Course</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.courses.update', 'course_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('course_id', null, ['id' => 'course_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_code', 'Course Code', ['class' => 'form-label']) !!}
                        {!! Form::text('course_code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_code-update', 'title' => 'Course ID', 'placeholder' => 'Insert course id', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_name', 'Course Name', ['class' => 'form-label']) !!}
                        {!! Form::text('course_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_name-update', 'title' => 'Role Name', 'placeholder' => 'Insert role name']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_description', 'Course Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('course_description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'course_description-update', 'title' => 'Course Description', 'placeholder' => 'Insert course description']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('course_status', 'Course Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('course_status', 1, false, ['id' => 'course_status_active-update', 'title' => 'Course Status Active']) !!}
                            {!! Form::label('course_status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('course_status', 0, false, ['id' => 'course_status_inactive-update', 'title' => 'Course Status Inactive']) !!}
                            {!! Form::label('course_status', 'Inactive', ['class' => 'form-label']) !!}
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update Course Modal -->

<!-- Update Batch Modal -->
<div class="modal fade" id="update-batch_modal" tabindex="-1" role="dialog" aria-labelledby="updateBatchHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateBatchHeaderModal">Update Batch</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.batches.update', 'batch_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('batch_id', null, ['id' => 'batch_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('year', 'Year', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('year', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'year-update', 'title' => 'Year', 'placeholder' => 'Choose year']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update Batch Modal -->

<!-- Create User Modal -->
<div class="modal fade" id="create-user_modal" tabindex="-1" role="dialog" aria-labelledby="createUserHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createUserHeaderModal">Create User</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.users.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'username-create', 'placeholder' => 'Insert username']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('fullname', 'Fullname', ['class' => 'form-label']) !!}
                        {!! Form::text('fullname', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'fullname-create', 'placeholder' => 'Insert fullname']) !!}
                    </div>
                </div>
                @if(!empty($role))
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_id', 'Role', ['class' => 'form-label']) !!}
                        {!! Form::select('role_id', $role, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role-create', 'title' => 'User Role', 'placeholder' => 'Choose role']) !!}
                    </div>
                </div>
                @endif
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'email-create', 'placeholder' => 'Insert email address']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('password', 'Password', ['class' => 'form-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'password-create', 'placeholder' => 'Insert password']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('password_validation', 'Confirm Password', ['class' => 'form-label']) !!}
                        {!! Form::password('password_validation', ['class' => 'form-control', 'maxlength' => 191, 'title' => 'Confirm Password', 'id' => 'confirm_password-create']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-users">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create User Modal -->

<!-- Create Role Modal -->
<div class="modal fade" id="create-role_modal" tabindex="-1" role="dialog" aria-labelledby="createRoleHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createRoleHeaderModal">Create Role</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.roles.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_name', 'Role Name', ['class' => 'form-label']) !!}
                        {!! Form::text('role_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role_name-create', 'title' => 'Role Name', 'placeholder' => 'Insert role name']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-roles">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Role Modal -->

<!-- Create Course Modal -->
<div class="modal fade" id="create-course_modal" tabindex="-1" role="dialog" aria-labelledby="createCourseHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createCourseHeaderModal">Create Course</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.courses.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_code', 'Course Code', ['class' => 'form-label']) !!}
                        {!! Form::text('course_code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_code-create', 'title' => 'Course Code', 'placeholder' => 'Insert course name to generate course code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_name', 'Course Name', ['class' => 'form-label']) !!}
                        {!! Form::text('course_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_name-create', 'title' => 'Course Name', 'placeholder' => 'Insert course name', 'oninput' => "codeValue()"]) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_description', 'Course Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('course_description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'course_description-create', 'title' => 'Course Description', 'placeholder' => 'Insert course description']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('course_status', 'Course Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('course_status', 1, false, ['id' => 'course_status_active-create', 'title' => 'Course Status Active']) !!}
                            {!! Form::label('course_status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('course_status', 0, false, ['id' => 'course_status_inactive-create', 'title' => 'Course Status Inactive']) !!}
                            {!! Form::label('course_status', 'Inactive', ['class' => 'form-label']) !!}
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-courses">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Course Modal -->

<!-- Create Batch Modal -->
<div class="modal fade" id="create-batch_modal" tabindex="-1" role="dialog" aria-labelledby="createBatchHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createBatchHeaderModal">Create Batch</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.batches.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('year', 'Year', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('year', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'year-create', 'title' => 'Year', 'placeholder' => 'Choose year']) !!}
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-batches">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Batch Modal -->

@push('scripts')
    <script>
        $('#reset_button-batches').on('click', function (event) {
            var modal = $('#create-batch_modal');
            modal.find('.modal-body #year-create').val("");
            modal.find('.modal-body #year-create').focus();
        });

        $('#reset_button-courses').on('click', function (event) {
            var modal = $('#create-course_modal');
            modal.find('.modal-body #course_name-create').val("");
            modal.find('.modal-body #course_code-create').val("");
            modal.find('.modal-body #course_description-create').val("");
            modal.find('.modal-body #course_status_active-create').prop('checked', false);
            modal.find('.modal-body #course_status_inactive-create').prop('checked', false);
            modal.find('.modal-body #course_name-create').focus();
        });

        $('#reset_button-roles').on('click', function (event) {
            var modal = $('#create-role_modal');
            modal.find('.modal-body #role_name-create').val("");
            modal.find('.modal-body #role_name-create').focus();
        });

        $('#reset_button-users').on('click', function (event) {
            var modal = $('#create-user_modal');
            modal.find('.modal-body #username-create').val("");
            modal.find('.modal-body #fullname-create').val("");
            modal.find('.modal-body #role-create').val("");
            modal.find('.modal-body #email-create').val("");
            modal.find('.modal-body #password-create').val("");
            modal.find('.modal-body #confirm_password-create').val("");
            modal.find('.modal-body #username-create').focus();
        });
    </script>
@endpush