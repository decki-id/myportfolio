@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Create Teacher')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Create Teacher</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'sisdeck.teachers.store']) !!}
                    @include('/sisdeck/teachers/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection