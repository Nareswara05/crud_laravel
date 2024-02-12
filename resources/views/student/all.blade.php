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
            @foreach ($student as $students)
                <tr>
                    <td>{{ $students->nis }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->birthdate }}</td>
                    <td>{{ $students->kelas->nama_kelas }}</td>
                    <td>{{ $students->address }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="/student/detail/{{ $students->id }}" class="btn btn-info btn-sm">
                                <ion-icon name="eye-outline"></ion-icon> Detail
                            </a>
                            <a href="/student/edit/{{ $students->id }}" class="btn btn-warning btn-sm">
                                <ion-icon name="pencil-outline"></ion-icon> Edit
                            </a>
                            <form action="/student/delete/{{ $students->id }}" method="post"
                                onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
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
