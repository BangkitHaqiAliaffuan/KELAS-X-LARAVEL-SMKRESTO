<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    
    <div class="container">
        <div class="mt-4">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <h2>Admin Page</h2>
                <ul class="navbar-nav gap-5">
                    <li class="nav-item">
                        {{ Auth::user()->email }}
                    </li>
                    <li class="nav-item">
                        Level : {{ Auth::user()->level }}
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <ul class="list-group">
                    @if (Auth::user()->level == 'admin')
                    <li class="list-group-item">
                        <a href="{{ url('admin/user') }}">User</a>
                    </li>
                    @endif
                    @if (Auth::user()->level == 'kasir')
                    <li class="list-group-item">
                        <a href="">Order</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Order Detail</a>
                    </li>
                    @endif
                    
                    @if (Auth::user()->level == 'manager')
                    <li class="list-group-item">
                        <a href="{{ url('admin/kategori') }}">Kategori</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('admin/menu') }}">Menu</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('admin/pelanggan') }}">Pelanggan</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('admin/order') }}">Order</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('admin/orderdetail') }}">Order Detail</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
            <div class="col-10">
                @yield('admincontent')
            </div>
        </div>
        <div class="bg-light mt-5">
            <p class="text-center">@smkrevit.com</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>