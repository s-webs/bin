<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css"
    />
    @vite(['resources/css/app.css'])
    <title>BIN</title>
</head>
<body class="bg-main-dark h-screen overflow-x-hidden">
<div class="text-main-primary font-bold">
    <a href="##" class="border-b border-b-main-gray flex items-center justify-center">
        <img src="{{ asset('assets/image/binance-logo.png') }}" alt="LOGO BINANCE" class="w-[150px] mr-[10px]">
        <div>Assistant</div>
    </a>
</div>
<div class="p-4 relative">
    @yield('content')
</div>
<footer>
    @vite(['resources/js/app.js'])
</footer>
</body>
</html>
