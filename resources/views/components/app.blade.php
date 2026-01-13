<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobify</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">

    <x-navigation></x-navigation>

    <main class="">
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>
</html>