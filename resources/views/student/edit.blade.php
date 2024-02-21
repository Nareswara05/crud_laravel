
@extends('layout.app')

@section('container')
<a href="/student/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h3>Edit Student</h3>

<form action="/student/update/{{$student->id}}" method="post" onsubmit="return alert('data berhasil diubah!');">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" value="{{$student->nis}}" id="nis" name="nis" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$student->name}}" id="nama" name="name" required>
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Birthdate</label>
        <input type="date" class="form-control" value="{{$student->birthdate}}" id="tanggal_lahir" name="birthdate" required>
    </div>

    <div  class="mb-3 text-dark">
        <label for="kelas" class="form-label">Class</label>
        <select class="form-select" name="kelas_id" id="kelas">
            @foreach ($kelas as $kelass)
            <option class="text-dark" name="kelas_id" value="{{ $kelass->id}}" {{$kelass->id == $student->kelas_id ? 'selected' : ''}}>{{ $kelass->nama_kelas }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Address</label>
        <input type="text" class="form-control" id="alamat" value="{{$student->address}}" name="address" required></input>
    </div>

    <button type="submit"  class="btn btn-primary">Submit</button>
</form>
@endsection
    

    
