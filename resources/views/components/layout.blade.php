<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIJA</title>
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    @vite(['resources/css/global.css', 'resources/css/app.css', 'resources/css/form.css', 'resources/css/show.css', 'resources/css/form.css', 'resources/css/filter.css'])

</head>
<body>

    <x-app-layout/>
    <main class="diy-content">
        {{ $slot }}
    </main>
</body>
</html>