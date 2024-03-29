<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class StudentsController extends Controller
{
    public function index(Request $request)
{
    $query = Student::with('kelas');

    // Filter by class if provided in the request
    if ($request->has('kelas_id')) {
        $query->whereHas('kelas', function ($q) use ($request) {
            $q->where('id', $request->kelas_id);
        });
    }

    // Search by name if provided in the request
    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $students = $query->paginate(6);

    return view('student.all', [
        'students' => $students,
        'kelasOptions' => Kelas::all(), // Pass all classes for the filter dropdown
        'selectedKelas' => $request->kelas_id, // Keep track of the selected class
    ]);
}


    public function show($id)
    {       return view('student.detail', [
            'student' => Student::find($id)
        ]);
    }


    public function home()
    {
        return view('home', [
            'satu' => 'halo selamat datang ini adalah homepage',
            'dua' => 'saya sedang belajar laravel'
        ]);
    }

    public function about()
    {
        return view('about', [
            'name' => 'Nareswara',
            'class' => '11 pplg 2',
        ]);
    }

    public function create()
    {
        return view('student.create', [
            "kelas" => Kelas::all()
        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'kelas_id' => 'required',
            'address' => 'required',
        ]);
        Student::create($validatedData);
        return redirect('student/all')->with('success', 'data berhasil ditambahkan');
    }


    public function edit(Student $student)
    {
        return view('student.edit', [
            'student' => $student,
            'kelas' => Kelas::all()
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'kelas_id' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
        ]);

        Student::where('id', $student->id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'kelas_id' => $request->kelas_id,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
        ]);
        Session::flash('success', 'Data berhasil diubah');
        return redirect('/student/all');
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect('/student/all');
    }
}
