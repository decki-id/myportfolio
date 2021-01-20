@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Course')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Course</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckCourse, ['route' => ['sisdeck.courses.update', $sisdeckCourse->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/courses/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection