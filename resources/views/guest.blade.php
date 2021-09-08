<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek your rank</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{mix('js/app.js') }}"></script>
    <style>
        .app{
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="app d-flex align-items-center">
        <div class="d-flex justify-content-center w-100">
            <div class="shadow card p-5">
                <h1 class="text-center">Selamat datang</h1>
                <hr>
                @if (session()->has('pesan_isi'))
                    <div class="alert alert-{{ session()->get('pesan_tipe') }} alert-dismissible fade show" role="alert">
                        {{ session()->get('pesan_isi') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('auth.login') }}" class="btn btn-danger">Login</a>
                <p class="pt-3 text-center"><small>&copy 2021 supported by fr</small></p>
            </div>
        </div>
    </div>
</body>
</html>

{{-- 
Color palette    
    // // scss-docs-start theme-colors-map
// $theme-colors: (
//   "primary":    #A64AC9,
//   "secondary":  #F5E6CC,
//   "success":    #17E9E0,
//   "info":       $info,
//   "warning":    #FCCD04,
//   "danger":     $danger,
//   "light":      $light,
//   "dark":       $dark
// ) !default;
//// scss-docs-end theme-colors-map
// scss-docs-start theme-colors-map
--}}
