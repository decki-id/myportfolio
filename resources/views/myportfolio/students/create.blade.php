@extends('/myportfolio/students/main')

@section('title', 'Decki\'s Portfolio - Students')

@section('section')
    <div class="students">
        <h3 class="text-center mt-3 mb-3">Student Form</h3>
        <form method="post" action="/myportfolio/students">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{old('name')}}" autofocus>
                @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="NRP" value="{{old('nrp')}}">
                @error('nrp') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <div class="form-group">
                <label for="majors">Majors</label>
                <select type="text" class="form-control @error('majors') is-invalid @enderror" id="majors" name="majors">
                    <option>==Choose majors==</option>
                    <option {{old('majors') == 'Administrasi Bisnis' ? 'selected' : ''}}>Administrasi Bisnis</option>
                    <option {{old('majors') == 'Komputerisasi Akuntansi' ? 'selected' : ''}}>Komputerisasi Akuntansi</option>
                    <option {{old('majors') == 'Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                    <option {{old('majors') == 'Teknik Industri' ? 'selected' : ''}}>Teknis Industri</option>
                    <option {{old('majors') == 'Teknik Informatika' ? 'selected' : ''}}>Teknik Informatika</option>
                    <option {{old('majors') == 'Teknik Mesin' ? 'selected' : ''}}>Teknik Mesin</option>
                </select>
                @error('majors') <div class="invalid-feedback">{{$message}}</div> @enderror
            </div>
            <a href="/myportfolio/students" class="btn btn-secondary float-right ml-1">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div>
@endsection