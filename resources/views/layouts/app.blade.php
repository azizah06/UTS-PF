<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Inventory Management</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/style.css')
</head>

<body>
    <div class="sidebar-app">
        <div class="container-fluid dashboard">
            <div class="row rw-dash">
                <div class="col-2">
                    @include('layouts.navbar')
                </div>
                <div class="col-10 px-0">
                    @include('layouts.navbar-top')
                    @yield('content')
                    {{-- <footer class="bg-secondary">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ea aperiam placeat odit. Modi
                            illo repellendus temporibus, explicabo laborum deserunt voluptatibus adipisci corrupti rem
                            magni et ipsa praesentium reiciendis earum!</p>
                    </footer> --}}
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')

</body>

</html>
