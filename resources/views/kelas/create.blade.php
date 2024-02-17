
@extends('layout.main')

@section('container')
<a href="/kelas/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h3>Create Class</h3>

<form action="/kelas/add" method="post" onsubmit="return alert('data berhasil ditambah!');">
    @csrf

    <div class="mb-3">
        <label for="nis" class="form-label">Nama Kelas</label>
        <input type="text" class="form-control" id="kelas" name="nama_kelas" required>
    </div>

    <button type="submit"  class="btn btn-primary">Submit</button>
</form>
@endsection
    

    
