@extends('layout.main')

@section('container')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $class)
                <tr>
                    <td>{{ $class->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
