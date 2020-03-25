<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $students = DB::table('students')->get();
        $students = Student::all()->sortBy('name');
        return view('myportfolio/students/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('myportfolio/students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:students',
            'nrp' => 'required|size:9|unique:students',
            'email' => 'required|email|unique:students',
            'majors' => 'required|in:Administrasi Bisnis,Komputerisasi Akuntansi,Sistem Informasi,Teknik Industri,Teknis Informatika,Teknik Mesin'
        ]);

        // $student = new Student;
        // $student->name = $request->name;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->majors = $request->majors;
        // $student->save();

        // Student::create([
        //     'name' => $request->name,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'majors' => $request->majors
        // ]);

        Student::create($request->all());
        return redirect('/myportfolio/students')->with('status', 'The data has been saved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) {
        return view('myportfolio/students/details', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}