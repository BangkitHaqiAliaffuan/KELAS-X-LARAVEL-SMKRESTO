<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="container">
        <div class="mt-2">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a href="/">
                        <img src="{{ asset('images/instagram.png') }}" alt="">
                    </a>
                    <ul class="navbar-nav gap-5">
                        <li class="nav-item">Cart</li>
                        <li class="nav-item">
                            <a href="{{ url('register') }}">Register</a>
                        </li>
                        <li class="nav-item">Email</li>
                        <li class="nav-item">Login</li>
                        <li class="nav-item">Logout</li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <ul class="list-group">
                    @foreach ($kategoris as $kategori)
                        <li class="list-group-item">
                            <a href="{{ url('show/'.$kategori->idkategori) }}">{{ $kategori -> kategori }}</a>
                        </li>
                    @endforeach 
                </ul>
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
        <div class="">
            Footer
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>