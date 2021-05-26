<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{ seo()->render() }}
    <link rel="stylesheet" href="https://themes.gohugo.io//theme/harbor/fontawesome/css/all.min.css" />

    <link id="dark-mode-theme" rel="stylesheet" href="https://themes.gohugo.io//theme/harbor/css/dark.css" />

    <script>
        var darkTheme = document.getElementById('dark-mode-theme')
        var storedTheme = localStorage.getItem('dark-mode-storage')
        if (storedTheme === 'dark') {
            darkTheme.disabled = false
        } else if (storedTheme === 'light') {
            darkTheme.disabled = true
        }

    </script>

    <script src="https://themes.gohugo.io//theme/harbor/js/main.bundle.js"></script>
    <script src="https://themes.gohugo.io//theme/harbor/js/instantpage.min.js" type="module" defer></script>
    <meta name="generator" content="Hugo 0.82.0" />
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="nav">

                <a href="{{route('posts.index', $blog->name)}}" class="nav-logo">
                    <img src="https://themes.gohugo.io//theme/harbor/images/icon.png" width="50" height="50"
                        alt="Logo" />
                </a>

            </div>
        </nav>

        <div class="intro-header">
            <div class="container">
                <div class="page-heading">

                    <h1>
                        {{ $blog->site_title }}
                    </h1>

                    <p>{{ $blog->description }}</p>


                </div>
            </div>
        </div>
    </header>

    <div class="container" role="main">

        @yield('content')


    </div>

    @include('themes::harbor.partials.footer')

</body>

</html>
