@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Class Scheduling')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Class Scheduling</h3></section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                {!! Form::model($sisdeckClassScheduling, ['route' => ['sisdeck.class_schedulings.update', $sisdeckClassScheduling->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/class_schedulings/fields')
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection