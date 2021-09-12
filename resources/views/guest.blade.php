<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek your rank</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{mix('js/app.js') }}"></script>
</head>
<body class="min-h-screen flex justify-center items-center">
    <div class="shadow-xl card p-12 bg-secondary">
        <h1 class="text-center text-2xl font-bold mb-4">Selamat datang</h1>
        <hr>
        @if (session()->has('pesan_isi'))
            <div class="alert alert-warning my-4">
                <div class="flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current"> 
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>                         
                    </svg> 
                    <label>{{ session()->get('pesan_isi') }}</label>
                </div>
            </div>
        @endif
        <a href="{{ route('auth.login') }}" class="btn btn-primary">Login</a>
        <p class="pt-3 text-center"><small>&copy 2021 supported by fr</small></p>
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
