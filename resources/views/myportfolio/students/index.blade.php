@extends('/myportfolio/students/main')

@section('title', 'Decki\'s Portfolio - Students')

@section('section')
    <div class="students">
        <div class="row mt-3 mb-3">
            <div class="col-sm-6 col-header"><h3>List of Students</h3></div>
            <div class="col-sm-6 col-button"><a href="/myportfolio/students/create" class="btn btn-primary">Add New Student</a></div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <ul class="list-group">
            @foreach ($students as $std)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$std->name}}
                <a href="/myportfolio/students/{{$std->id}}" class="badge badge-info">Details</a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection