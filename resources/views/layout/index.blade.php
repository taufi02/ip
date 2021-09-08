<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
<body class="">
    {{-- Navigation --}}
    <div class="flex justify-end items-center bg-accent space-x-4 p-4">
        <span class="text-primary-content font-bold">
            {{ session('user')->name }}
        </span>
        <div class="relative" x-data="{menu : false}" @click="menu = !menu" @click.outside="menu = false">
            <img src="{{ session('user')->avatar }}" alt="" class="rounded-full overflow-hidden h-8 w-8 cursor-pointer">
            <div class="absolute top-12 right-0" x-show="menu" x-transition>
                <ul class="menu py-3 shadow-lg bg-base-200 rounded-lg">
                    <li>
                        <a  href="{{ route('auth.logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Content --}}
    <div>
        @yield('content')
    </div>
</body>
</html>
