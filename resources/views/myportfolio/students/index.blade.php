@extends('main')

@section('title', 'Decki\'s Portfolio - Students')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">List of Students</h1>
                <a href="/myportfolio/students/create" class="btn btn-primary mb-2">Add New Student</a>
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
        </div>
    </div>
@endsection