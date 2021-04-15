@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update User')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update User</h3></section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                {!! Form::model($sisdeckUser, ['route' => ['sisdeck.users.update', $sisdeckUser->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/users/fields')
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection