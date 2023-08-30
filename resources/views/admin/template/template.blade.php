<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{config('app.name')}}</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            @yield('header')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            footer
        </footer>
    </section>
</body>
</html>
