<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    {{-- import bootstrap v5.2 --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css' integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==' crossorigin='anonymous'/>
    {{-- import font awersome v6.1.2 --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' integrity='sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==' crossorigin='anonymous'/>
    {{-- take the css file from app.css -> with asset function --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- take the js file from app.js -> with asset function --}}
    <script  src=" {{ asset('js/app.js') }} "></script>

    @yield('header_scripts')
</head>
<body>
    
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('page_content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>