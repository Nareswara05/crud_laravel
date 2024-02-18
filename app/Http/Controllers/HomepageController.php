<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function student()
    {
        $students = Student::with('kelas')->get();
        return view('student', compact('students'));
    }

    

    public function kelas()
    {
        return view('kelas', [
            'kelas' => Kelas::all()
        ]);
    }
}
