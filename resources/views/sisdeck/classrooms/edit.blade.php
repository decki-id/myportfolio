@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Classroom')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Classroom</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckClassroom, ['route' => ['sisdeck.classrooms.update', $sisdeckClassroom->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/classrooms/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection