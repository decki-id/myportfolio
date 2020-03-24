@extends('main')

@section('title', 'Decki\'s Portfolio - Mahasiswa')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Majors</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $std)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$std->name}}</td>
                            <td>{{$std->nrp}}</td>
                            <td>{{$std->email}}</td>
                            <td>{{$std->majors}}</td>
                            <td>
                                <a href="" class="badge badge-success">Update</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection