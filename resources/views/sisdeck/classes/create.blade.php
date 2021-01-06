@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Create Class')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Create Class</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'sisdeck.classes.store']) !!}
                    @include('/sisdeck/classes/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
