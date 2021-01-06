@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Class')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Class</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckClass, ['route' => ['sisdeck.classes.update', $sisdeckClass->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/classes/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection