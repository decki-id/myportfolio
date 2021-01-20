@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Create Day')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Create Day</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'sisdeck.days.store']) !!}
                    @include('/sisdeck/days/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
