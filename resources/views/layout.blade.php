<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Management Application By OSTAD</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ostad Exam 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('/') }}>All Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('/create') }}>Create New Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center my-5 text-decoration-underline">Contact Management Application</h3>

        @yield('content')
    </div>

    <script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
</body>

</html>
