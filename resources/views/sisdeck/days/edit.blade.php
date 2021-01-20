@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Day')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Day</h3></section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                {!! Form::model($sisdeckDay, ['route' => ['sisdeckDays.update', $sisdeckDay->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/days/fields')
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection