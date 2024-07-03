<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/didot-2" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <main>
        @livewire('navigation')
        <main>{{ $slot }}</main>
        @livewire('footer')
    </main>
</body>

</html>
