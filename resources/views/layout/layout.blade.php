<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scénář</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased min-h-screen w-full overflow-hidden scroll-smooth flex flex-col dark:bg-black/70">
<main class="grow">
    @yield("content")
</main>
</body>

@vite('resources/js/app.js')

</html>
