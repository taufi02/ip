<!DOCTYPE html>
<html lang="en" x-data="tema()" :data-theme="tema" x-init="cekTema()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Cek your IP</title>
    @livewireStyles
</head>
<body class="min-h-screen flex justify-center items-center">
    <div class="shadow-xl card p-12 bg-base-200">
        <h1 class="text-center text-2xl font-bold mb-4">Selamat datang</h1>
        @if (session()->has('pesan_isi'))
            <div class="bg-opacity-5 alert alert-warning my-4">
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
    <script>
        function tema(){
            return {
                tema : 'dark',
                setTema(){
                    console.log(this.tema);
                    if(this.tema == 'cupcake'){
                        document.cookie = "tema=dark; expires= 18 Dec 2022 12:00:00 UTC; SameSite=None; Secure";
                        this.tema = 'dark';
                    } else {
                        document.cookie = "tema=cupcake; expires= 18 Dec 2022 12:00:00 UTC; SameSite=None; Secure";
                        this.tema = 'cupcake';
                    }
                },
                cekTema(){
                    let tema;
                    let key = 'tema';
                    Cookies = decodeURIComponent(document.cookie).split(';');
                    Cookies.forEach((e)=>{
                        Cookie = e.substr(1);
                        NamaCookie = Cookie.split('=')[0];
                        if(NamaCookie == key){
                            tema = Cookie.split('=')[1];
                        }
                    });
                    return this.tema = tema;
                }
            }
        }
    </script>
</body>
</html>
