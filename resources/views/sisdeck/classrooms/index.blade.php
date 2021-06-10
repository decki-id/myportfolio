@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Classrooms')

@section('content')
    <div class="row align-items-center px-3 pt-3">
        <div class="col-sm-6 dhs_col-header"><h3>Classrooms</h3></div>
        <div class="col-sm-6 dhs_col-button">
            <a href="{{ route('sisdeck.classrooms.create') }}" class="btn btn-primary dhs_button">Add New Classroom</a>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('/sisdeck/classrooms/table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
