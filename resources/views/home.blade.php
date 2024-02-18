@extends('layout.main')

@section('container')

<header class="container-fluid p-3 text-center bg-primary header-bg">
    <h1>Sekolah XYZ</h1>
    <p class="lead">Tempat Terbaik untuk Pendidikan Berkualitas.</p>
</header>

<main class="container py-5">
    <div class="row gx-5">
        <div class="col-md-6 pe-md-5">
            <h2>Tentang Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula auctor lorem, non gravida quam gravida in. Vivamus euismod magna sem, a consectetur eros auctor at. Curabitur in leo augue. Praesent at eros quis est rhoncus molestie eu quis justo. Suspendisse pharetra, lorem quis auctor tincidunt, eros odio eleifend elit, vel tincidunt enim neque eget magna. Morbi rutrum velit eget libero laoreet, eget consectetur risus tincidunt.</p>
            <a href="#" class="btn btn-primary mt-3">Selengkapnya</a>
        </div>
        <div class="col-md-6 ps-md-5">
            <h2>Program Unggulan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula auctor lorem, non gravida quam gravida in. Vivamus euismod magna sem, a consectetur eros auctor at. Curabitur in leo augue. Praesent at eros quis est rhoncus molestie eu quis justo. Suspendisse pharetra, lorem quis auctor tincidunt, eros odio eleifend elit, vel tincidunt enim neque eget magna. Morbi rutrum velit eget libero laoreet, eget consectetur risus tincidunt.</p>
            <a href="#" class="btn btn-primary mt-3">Lihat Program</a>
        </div>
    </div>
</main>

<footer class="container-fluid text-center mt-5 bg-primary footer-bg">
    <p>&copy; 2024 Sekolah XYZ. All rights reserved.</p>
</footer>



@endsection
