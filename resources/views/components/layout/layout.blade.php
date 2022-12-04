<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <x-layout.favicon/>
    @vite('resources/css/app.css')
</head>
<body {{ $attributes->class(["antialiased min-h-screen w-full scroll-smooth flex flex-col"]) }}>
<main class="grow bg-gray-50">
    {{ $slot }}
</main>
</body>
@vite('resources/js/app.js')

</html>