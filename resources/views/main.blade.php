<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="img/ico" href="/favicon.ico">

        <title>{{ $seo_title }}</title>
        <meta property="og:title" content="{{ $seo_title }}" />
        <meta name="title" content="{{ $seo_title }}" />
        <meta itemprop="name" content="{{ $seo_title }}">

        <meta name="description" content="{{ $seo_description }}" />
        <meta property="og:description" content="{{ $seo_description }}" />
        <meta itemprop="description" content="{{ $seo_description }}">

        <meta name="keywords" content="{{ $seo_keywords }}" />
        <meta property="og:keywords" content="{{ $seo_keywords }}" />
        <meta itemprop="keywords" content="{{ $seo_keywords }}">

        <link rel="image_src" href="{{ $seo_image }}" />
        <meta property="og:image" content="{{ $seo_image }}" />
        <meta itemprop="image" content="{{ $seo_image }}">

        <script type="text/javascript">
            BODev = {};
            BODev.Lang = {
                name_empty: "@lang('main.name_empty')",
                email_empty: "@lang('main.email_empty')",
                email_invalid: "@lang('main.email_invalid')",
                message_empty: "@lang('main.message_empty')",
                send_success: "@lang('main.send_success')",
                sending: "@lang('main.start_sending')"
            };
        </script>

        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
    </head>
    <body>
        <header class="header">
            <div class="navigation-wrapper">
                <div class="container">
                    <img class="logo" src="{{ asset('images/logo-white.png') }}" alt="Tylyk Yulia designer" />
                    <ul class="navigation">
                        <li><a href="#about-me">About me</a></li>
                        <li><a href="#projects">Portfolio</a></li>
                        <li><a href="#contacts">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="big-logo-wrapper">
                <div class="big-logo">
                    <img src="{{ asset('images/logo-big.png') }}" alt="Tylyk Yulia designer">
                </div>
            </div>
        </header>

        <section id="about-me">
            <div class="center">
                <h2 class="title">About me</h2>
            </div>
            <div class="container">
                <p>{!! $about_me_short !!}</p>
            </div>
        </section>

        <section id="projects">
            <div class="center"><h2 class="title">Portfolio</h2></div>
            <div class="container">
                <div class="row">
                    @foreach($projects as $p)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-col">
                            <a data-fancybox="gallery" href="{{ $p['image_url'] }}" style="display: block">
                                <div class="project">
                                    <div class="project-image" style="background-image: url({{ $p['image_url'] }});"></div>
                                    <h3>{{ $p['name'] }}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <footer>
            <section id="contacts">
                <div class="container">
                    <h2 class="title">Contacts</h2>
                    <p>Email: <a href="mailto:tylyc.julia@gmail.com">tylyc.julia@gmail.com</a></p>
                    <br>
                    <p>Tylyk Yulia. All rights reserved © 2017</p>
                </div>
            </section>
        </footer>

        <script type="text/javascript" src="/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="/js/toastr.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <link href="/css/toastr.min.css" rel="stylesheet">
    </body>
</html>
