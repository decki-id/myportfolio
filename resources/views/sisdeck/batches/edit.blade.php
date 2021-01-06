@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Batch')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Batch</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckBatch, ['route' => ['sisdeck.batches.update', $sisdeckBatch->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/batches/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection