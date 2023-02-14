<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/css/layout/admin/main.css'])
    @stack('style')
    <title>MoonLight</title>
</head>

<body>
    <div class="main-wrap">
        @yield('main')
    </div>
</body>

</html>
