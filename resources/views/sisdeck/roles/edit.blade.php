@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sisdeck Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sisdeckRole, ['route' => ['sisdeckRoles.update', $sisdeckRole->id], 'method' => 'patch']) !!}

                        @include('sisdeck_roles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection