@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sisdeck Teacher
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sisdeckTeacher, ['route' => ['sisdeckTeachers.update', $sisdeckTeacher->id], 'method' => 'patch']) !!}

                        @include('sisdeck_teachers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection