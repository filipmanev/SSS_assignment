<!DOCTYPE html>
<html>
<head>
    <title>College and Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('colleges.index') }}">College Management</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('colleges.index') }}">Colleges</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Students</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
