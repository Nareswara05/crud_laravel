<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/student/all">Students</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/kelas/all">Grade</a>
              </li>
              @guest
                  <!-- Display login button if the user is not logged in -->
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/login/index">Login</a>
                  </li>
              @else
                  <!-- Display a greeting message if the user is logged in -->
                  <li class="nav-item">
                      <span class="nav-link active">Hi, {{ auth()->user()->name }}</span>
                  </li>
                  <li class="nav-item">
                      <form action="/login/logout" method="post" class="d-inline">
                          @csrf
                          <button type="submit" class="btn btn-link nav-link">Logout</button>
                      </form>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>