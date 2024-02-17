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
                <th scope="col">Action</th>
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
                <td>
                    <div class="d-flex gap-2">
                        <a href="/student/detail/{{ $student->id }}" class="btn btn-info btn-sm">
                            <ion-icon name="eye-outline"></ion-icon> Detail
                        </a>
                        <a href="/student/edit/{{ $student->id }}" class="btn btn-warning btn-sm">
                            <ion-icon name="pencil-outline"></ion-icon> Edit
                        </a>
                        <form action="/student/delete/{{ $student->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">
                                <ion-icon name="trash-outline"></ion-icon> Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        
        @endforeach        
        </tbody>
    </table>

    <a href="/student/create" class="btn btn-primary">
        <ion-icon name="add-outline"></ion-icon> Create Student
    </a>
@endsection
