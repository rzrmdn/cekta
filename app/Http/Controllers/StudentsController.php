<?php

namespace App\Http\Controllers;

use App\Student;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = DB::table('students')->get();
        // return view('admin.pages.students.index',['students'=> $students]);
        return view('admin.pages.students.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table students
        // Student::create([
		// 'nama' => $request->nama,
		// 'nim' => $request->nim,
		// 'tempat_lahir' => $request->tempat_lahir,
        // 'tanggal_lahir' => $request->tanggal_lahir,
        // 'jenis_kelamin' => $request->jenis_kelamin,
        // 'alamat' => $request->alamat,
        // 'angkatan' => $request->angkatan,
        // 'sks' => $request->sks,
        // 'email' => $request->email,
        // 'no_hp' => $request->no_hp,
        // 'keterangan' => $request->keterangan,
        // 'foto' => $request->foto
        // ]);
        $request->validate([
            'nama' =>'required',
            'nim' =>'required',
            'tempat_lahir' =>'required',
            'tanggal_lahir' =>'required',
            'jenis_kelamin' =>'required',
            'alamat' =>'required',
            'angkatan' =>'required',
            'sks' =>'required'
        ]);
        
        Student::create($request->all());
	    return redirect('/admin_mahasiswa')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.pages.students.show',['student'=> $student]);
        // return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.pages.students.edit', ['student'=> $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' =>'required',
            'nim' =>'required',
            'tempat_lahir' =>'required',
            'tanggal_lahir' =>'required',
            'jenis_kelamin' =>'required',
            'alamat' =>'required',
            'angkatan' =>'required',
            'sks' =>'required'
        ]);
        
        // Student::where('id', $student->id)
        //     ->update([
        //         'nama' => $request->nama,
        //         'nim' => $request->nim,
        //         'tempat_lahir' => $request->tempat_lahir,
        //         'tanggal_lahir' => $request->tanggal_lahir,
        //         'jenis_kelamin' => $request->jenis_kelamin,
        //         'alamat' => $request->alamat,
        //         'angkatan' => $request->angkatan,
        //         'sks' => $request->sks,
        //         'email' => $request->email,
        //         'no_hp' => $request->no_hp,
        //         'keterangan' => $request->keterangan
        //     ]);
        $student->nama = $request->nama;
        $student->nim = $request->nim;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->alamat = $request->alamat;
        $student->angkatan = $request->angkatan;
        $student->sks = $request->sks;
        $student->email = $request->email;
        $student->no_hp = $request->no_hp;
        $student->keterangan = $request->keterangan;
        $student->save();
        return redirect('/admin_mahasiswa')->with('status', 'Data Mahasiswa Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/admin_mahasiswa')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
