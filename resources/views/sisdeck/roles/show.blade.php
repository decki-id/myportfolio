@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Role Detail')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">User Detail</h3></section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('/sisdeck/roles/show_fields')
                    <a href="{{ route('sisdeck.roles.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
