<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>

        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/student">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/kelas">Grade</a>
                </li>
            </ul>

            <!-- Separate Login Button -->
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login/index">Login</a>
                    </li>
                @else
                    <!-- Display a greeting message if the user is logged in -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="/login/logout" method="post">
                                    @csrf
                                    <button type="button" onclick="confirmLogout()" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- SweetAlert Script -->

