<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your meta tags, CSS links, and other head elements here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


</head>
<body>
    <!-- Navbar for instructor features -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('instructor.home') }}">
        <img src="{{ asset('images/Najah_logo.png') }}" alt="An-Najah Logo" height="30"> An-Najah Moodel
    </a>
    <!-- ... -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('instructor.home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('instructor.dashboard') }}">My Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('instructor.profile') }}">Profile</a>
        </li>
        <li class="nav-item">
            <!-- Corrected logout form outside the list item -->
        </li>
    </ul>
    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
</nav>

 <!-- Main Content Area -->
<main role="main" class="container">
    @yield('content')
</main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>
