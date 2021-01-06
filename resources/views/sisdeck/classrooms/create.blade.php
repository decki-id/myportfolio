@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Create Classroom')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Create Classroom</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'sisdeck.classrooms.store']) !!}
                    @include('/sisdeck/classrooms/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
