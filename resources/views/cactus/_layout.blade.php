<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta name="generator" content="Hugo 0.82.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}

    <link rel="stylesheet" href="https://themes.gohugo.io/theme/hugo-theme-cactus/css/style-white.css">


    <link rel="icon" type="image/png" href="https://themes.gohugo.io/theme/hugo-theme-cactus/images/favicon.ico" />
    <link href="https://themes.gohugo.io//theme/hugo-theme-cactus/index.xml" rel="alternate" type="application/rss+xml"
        title="Cactus theme example" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">

</head>

<body class="max-width mx-auto px3 ltr">
    <div class="content index py4">

        <header id="header">
            <a href="{{ route('posts.index', $blog->name) }}">

                <div id="logo"
                    style="background-image: url(https://themes.gohugo.io/theme/hugo-theme-cactus/images/logo.png)">
                </div>

                <div id="title">
                    <h1>{{ $blog->site_title }}</h1>
                </div>
            </a>
            <div id="nav">
                <ul>
                    <li class="icon">
                        <a href="#" aria-label="Menu"><i class="fas fa-bars fa-2x" aria-hidden="true"></i></a>
                    </li>

                    <li><a href="{{ route('posts.index', $blog->name) }}">Home</a></li>



                </ul>
            </div>
        </header>
        @yield('content')

        @include('themes::cactus.partials._footer')


    </div>
</body>

<link rel="stylesheet" href=https://themes.gohugo.io//theme/hugo-theme-cactus/lib/font-awesome/css/all.min.css>
<script src=https://themes.gohugo.io//theme/hugo-theme-cactus/lib/jquery/jquery.min.js></script>
<script src=https://themes.gohugo.io//theme/hugo-theme-cactus/js/main.js></script>

</html>
