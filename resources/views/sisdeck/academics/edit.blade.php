@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Academic')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Academic</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckAcademic, ['route' => ['sisdeck.academics.update', $sisdeckAcademic->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/academics/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection