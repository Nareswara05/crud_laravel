
@extends('layout.app')

@section('container')
<a href="/student/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h3>Create Student</h3>

<form action="/student/add" method="post" onsubmit="return alert('data berhasil ditambah!');">
    @csrf

    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="number" class="form-control" id="nis" name="nis" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="name" required>
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Birthdate</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="birthdate" required>
    </div>

    <div class="mb-3">
        <label for="kelas_id" class="form-label">Class</label>
        <select class="form-select" name="kelas_id" required id="">
            @foreach ($kelas as $kelass)
            <option value="{{$kelass->id}}">{{$kelass->nama_kelas}}</option>  
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Address</label>
        <input type="text" class="form-control" id="alamat" name="address" required></input>
    </div>

    <button type="submit"  class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const studentForm = document.getElementById('studentForm');

        studentForm.addEventListener('submit', function (event) {
            event.preventDefault();

            // Check if NIS already exists using AJAX
            const nisInput = document.getElementById('nis');
            const nisValue = nisInput.value;

            // AJAX request to check if NIS already exists
            axios.get(`/check-nis/${nisValue}`)
                .then(response => {
                    if (response.data.exists) {
                        // If NIS already exists, show SweetAlert error
                        Swal.fire({
                            title: 'NIS Already Exists!',
                            text: 'Please enter a unique NIS.',
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        // If NIS doesn't exist, proceed with form submission
                        Swal.fire({
                            title: 'Data berhasil ditambah!',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                studentForm.submit();
                            }
                        });
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        });
    });
</script>
@endsection
    

    
