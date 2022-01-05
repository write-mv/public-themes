<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ seo()->render() }}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    @themeStyles(true)
</head>

<body>
    <div class="container w-full px-4 py-24 mx-auto">
        @include('themes::themes.default.partials._nav')

        @yield('content')
    </div>


    @include('themes::themes.default.partials._footer')
    @livewireScripts
    @themeScripts(true)
</body>

</html>
