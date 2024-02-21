@extends('layout.app')

@section('container')
<a href="/student/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h2>Detail Siswa</h2>
<p>NIS : {{ $student->nis }}</p>
<p>Name : {{ $student->name }}</p>
<p>Birthdate : {{ $student->birthdate }}</p>
<p>Class : {{ $student->kelas ? $student->kelas->nama_kelas : 'N/A' }}</p>
<p>Address : {{ $student->address }}</p>


@endsection