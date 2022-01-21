<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{ seo()->render() }}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    @livewireStyles
    @themeStyles(true)
</head>

<body class="font-sans bg-paper">
    {{ $slot }}

    @livewireScripts
    @themeScripts(true)
</body>

</html>
