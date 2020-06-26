@extends('/myportfolio/students/main')

@section('title', 'Decki\'s Portfolio - Students')

@section('section')
    <div class="students">
                <h3 class="text-center mt-3 mb-3">Update Student</h3>
                <form method="post" action="/myportfolio/students/{{$student->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{$student->name}}" autofocus>
                        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="NRP" value="{{$student->nrp}}">
                        @error('nrp') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{$student->email}}">
                        @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="majors">Majors</label>
                        <select type="text" class="form-control @error('majors') is-invalid @enderror" id="majors" name="majors">
                            <option>==Choose majors==</option>
                            <option {{$student->majors == 'Administrasi Bisnis' ? 'selected' : ''}}>Administrasi Bisnis</option>
                            <option {{$student->majors == 'Komputerisasi Akuntansi' ? 'selected' : ''}}>Komputerisasi Akuntansi</option>
                            <option {{$student->majors == 'Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                            <option {{$student->majors == 'Teknik Industri' ? 'selected' : ''}}>Teknis Industri</option>
                            <option {{$student->majors == 'Teknik Informatika' ? 'selected' : ''}}>Teknik Informatika</option>
                            <option {{$student->majors == 'Teknik Mesin' ? 'selected' : ''}}>Teknik Mesin</option>
                        </select>
                        @error('majors') <div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <a href="/myportfolio/students/{{$student->id}}" class="btn btn-secondary float-right ml-1">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection