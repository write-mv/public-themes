<!DOCTYPE html>
<html>

<head>
    <meta name="generator" content="Hugo 0.82.0" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {!! SEO::generate() !!}
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://themes.gohugo.io//theme/hugo-ink/css/normalize.css" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://themes.gohugo.io//theme/hugo-ink/css/main.css" />

    <link id="dark-scheme" rel="stylesheet" type="text/css"
        href="https://themes.gohugo.io//theme/hugo-ink/css/dark.css" />

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://themes.gohugo.io//theme/hugo-ink/js/main.js"></script>
</head>

<body>
    <div class="container wrapper">
        <div class="header">


            <h1 class="site-title"><a href="{{ route('posts.index', $blog->name) }}">{{ $blog->site_title }}</a>
            </h1>
            <div class="site-description">
                <p>
                    {{ $blog->description }}

                </p>
                <nav class="nav social">
                    <ul class="flat">
                        <li><a href="https://github.com/knadh/hugo-ink" title="Github"><i data-feather="github"></i></a>
                        </li>
                        <li><a href="https://themes.gohugo.io//theme/hugo-ink/index.xml" title="RSS"><i
                                    data-feather="rss"></i></a></li>
                        <li><a href="#" class="scheme-toggle" id="scheme-toggle"></a></li>
                    </ul>
                </nav>
            </div>

            <nav class="nav">
                <ul class="flat">

                    <li>
                        <a href="https://themes.gohugo.io//theme/hugo-ink/">Home</a>
                    </li>


                </ul>
            </nav>
        </div>



        @yield('content')

    </div>
    @include("themes::ink.partials._footer")

    <script>
        feather.replace()

    </script>
</body>

</html>
