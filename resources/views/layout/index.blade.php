<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cek your rank</title>
    <style>
        .app{
            min-height: 100vh;
        }
        .avatar{
            height: 40px;
        }
    </style>
</head>
<body class="bg-light bg-gradient">
    <div class="app container pb-5">
        {{-- Navigation --}}
        <div class="row p-2">
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <span class="nav-link " href="#">{{ session('user')->name }}</span>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <img src="{{ session('user')->avatar }}" alt="" class="rounded-circle avatar shadow">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        {{-- Content --}}
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
