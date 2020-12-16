@extends('/sisdeck/main')

@section('title', 'Decki\'s Portfolio - Students Information Systems')

@section('section')
    <div class="students">
        <h3 class="text-center mt-3 mb-3">Student Details</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$student->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                <p class="card-text">{{$student->email}}</p>
                <p class="card-text">{{$student->majors}}</p>
                <a href="/students/{{$student->id}}/edit" class="btn btn-success">Update</a>
                <form method="post" action="/students/{{$student->id}}" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                </form>
                <a href="/students" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection