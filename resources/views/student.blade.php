@extends('layout.main')

@section('container')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nis</th>
                <th scope="col">Name</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Class</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)

            <tr>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->kelas ? $student->kelas->nama_kelas : 'N/A' }}</td>
                <td>{{ $student->address }}</td>               
            </tr>
        
        @endforeach        
        </tbody>
    </table>

   

@endsection
