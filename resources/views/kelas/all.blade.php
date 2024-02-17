@extends('layout.main')

@section('container')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $class)
                <tr>
                    <td>{{ $class->nama_kelas }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="/kelas/edit/{{ $class->id }}" class="btn btn-warning btn-sm">
                                <ion-icon name="pencil-outline"></ion-icon> Edit
                            </a>
                            <form action="/kelas/delete/{{ $class->id }}" method="post"
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

    <a href="/kelas/create" class="btn btn-primary">
        <ion-icon name="add-outline"></ion-icon> Create Class
    </a>
@endsection
