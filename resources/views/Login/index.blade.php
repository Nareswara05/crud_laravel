<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg rounded-3 animate__animated animate__fadeIn">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Login</h2>
                        <form action="/login/index" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label visually-hidden">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label visually-hidden">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Masukkan password  " required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block rounded-3  animate__animated animate__fadeInUp col-12">
                              Login
                          </button>
                        </form>
                        <p class="text-center mt-3">Belum Punya Akun? <a href="/register/index">Daftar Sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Login Failed",
            text: "{{ $message }}",
        });
    </script>

    @elseif ($message = Session::get('success'))
    <script>
        alert("Login Success: {{ $message }}");
    </script>
    
    @endif


</body>

</html>
