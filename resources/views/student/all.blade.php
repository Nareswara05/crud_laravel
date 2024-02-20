@extends('layout.app')

@section('container')
    <style>
        body {
            overflow: hidden;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; 
        }
    </style>

<div class="row justify-content-end">
    <div class="col-md-3">
        <form action="/student/all" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>

    <div class="col-md-3">
        <form action="/student/all" method="GET">
            <div class="input-group mb-3">
                <select class="form-control" name="kelas_id" onchange="this.form.submit()">
                    <option value="">Select Class</option>
                    @foreach($kelasOptions as $kelasOption)
                        <option value="{{ $kelasOption->id }}" {{ $selectedKelas == $kelasOption->id ? 'selected' : '' }}>
                            {{ $kelasOption->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</div>


    <table class="ml-5 table table-striped table-bordered">
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
                            <a href="/student/details/{{ $student->id }}" class="btn btn-info btn-sm">
                                <ion-icon name="eye-outline"></ion-icon> Detail
                            </a>
                            <a href="/student/edit/{{ $student->id }}" class="btn btn-warning btn-sm">
                                <ion-icon name="pencil-outline"></ion-icon> Edit
                            </a>
                            <form action="/student/delete/{{ $student->id }}" method="post" id="deleteForm">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
    <a href="/student/create" class="btn btn-primary ml-5">
        <ion-icon name="add-outline"></ion-icon> Create Student
    </a>

    <div class="pagination-container">
        {{ $students->links() }}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm').submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
