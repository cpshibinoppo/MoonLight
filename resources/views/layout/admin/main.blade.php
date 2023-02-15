<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss'])
    @vite(['resources/css/layout/admin/main.css'])
    @auth('admin')
    @vite(['resources/css/admin/navbar.scss'])
    @endauth

    @stack('style')
    <title>MoonLight</title>
</head>

<body>
    <div class="main-wrap">
        @yield('main')
    </div>
    @auth('admin')
        @include('layout.admin.navbar')
    @endauth
    @stack('script')
    @auth('admin')
    @vite(['resources/js/nav.js'])
    @endauth
</body>

</html>
