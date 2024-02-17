
@extends('layout.main')

@section('container')
<a href="/kelas/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h3>Edit Kelas</h3>

<form action="/kelas/update/{{$nama_kelas->id}}" method="post" onsubmit="return alert('data berhasil diubah!');">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nis" class="form-label">Kelas</label>
        <input type="text" class="form-control" value="{{$nama_kelas->nama_kelas}}" id="kelas" name="nama_kelas" required>
    </div>

    <button type="submit"  class="btn btn-primary">Submit</button>
</form>
@endsection
    

    
