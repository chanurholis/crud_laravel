<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">

    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <a class="navbar-brand text-light" href="{{url('/')}}">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/Home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/About')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/Mahasiswa')}}">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/Student')}}">Student</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('container')

</body>

</html>