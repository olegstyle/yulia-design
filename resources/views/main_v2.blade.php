<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="img/ico" href="{{ assert('favicon.ico') }}">

    <title>{{ $seo_title }}</title>
    <meta property="og:title" content="{{ $seo_title }}"/>
    <meta name="title" content="{{ $seo_title }}"/>
    <meta itemprop="name" content="{{ $seo_title }}">

    <meta name="description" content="{{ $seo_description }}"/>
    <meta property="og:description" content="{{ $seo_description }}"/>
    <meta itemprop="description" content="{{ $seo_description }}">

    <meta name="keywords" content="{{ $seo_keywords }}"/>
    <meta property="og:keywords" content="{{ $seo_keywords }}"/>
    <meta itemprop="keywords" content="{{ $seo_keywords }}">

    <link rel="image_src" href="{{ $seo_image }}"/>
    <meta property="og:image" content="{{ $seo_image }}"/>
    <meta itemprop="image" content="{{ $seo_image }}">

    <script type="text/javascript">
        BODev = {};
        BODev.Lang = {
            name_empty: "@lang('main.name_empty')",
            email_empty: "@lang('main.email_empty')",
            email_invalid: "@lang('main.email_invalid')",
            message_empty: "@lang('main.message_empty')",
            send_success: "@lang('main.send_success')",
            sending: "@lang('main.start_sending')",
        };
    </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ mix('build/v2/css/app.css') }}" rel="stylesheet">
</head>
<body>

<header class="header">
    <div class="camera-flower"></div>
    <div class="camera"></div>
    <div class="computer-wrapper">
        <div class="computer-subwrapper">
            <div class="usb"></div>
            <div class="paper"></div>
            <div class="computer"></div>
        </div>
    </div>
    <div class="phone"></div>
    <div class="flower-right"></div>
    <div class="wizitka"></div>

    <div class="mouse"></div>
    <div class="pin"></div>

    <div class="header-content">
        <div class="web-img"></div>
        <ul class="menu">
            <li><a class="btn btn-link" href="#portfolio">@lang('main.portfolio')</a></li>
            <li><a class="btn btn-link btn-main" href="#about_me">@lang('main.about_me')</a></li>
            <li><a class="btn btn-link" href="#contacts">@lang('main.contacts')</a></li>
        </ul>

        <div class="designer">
            <div class="designer-flowers"></div>
            <div class="designer-dark">DESIGNER</div>
            <div class="designer-light">DESIGNER</div>
        </div>

        <div class="my-name-wrapper">
            <div class="prelest">Prelest*</div>
            <div class="my-name">Yulia Tylyk</div>
        </div>

        <div class="clearfix"></div>

        <div class="its-my-portfolio">PORTFOLIO</div>

        <div class="clearfix"></div>

        <div class="portfolio-dates">
            2017 - {{ date('Y') }}
        </div>

        <hr class="separate" />

        <div class="social">
            <a href="skype:{{ $skype }}">
                <i class="fab fa-skype"></i>
                <span>{{ $skype }}</span>
            </a>
            <a href="tel:{{ $phone }}">
                <i class="fab fa-whatsapp"></i>
                <span>{{ $phone }}</span>
            </a>
            <a href="mailto:{{ $email }}">
                <i class="fas fa-envelope"></i>
                <span>{{ $email }}</span>
            </a>
        </div>
    </div>

    <div class="book"></div>

    <a href="#about_me" class="go-to-about-me"></a>
</header>

<section id="about_me" class="about-me">
    <div class="flower-top"></div>
    <div class="flower-bot"></div>

    <h3 class="title-with-lines"><span>@lang('main.about_me')</span></h3>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="photo-wrapper">
                    <div class="photo-border"></div>
                    <div class="photo"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="info">
                    <p>{!! $about_me_short !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="skills-wrapper">
    <div class="gradient"></div>
    <h3 class="title-with-lines"><span>@lang('main.my_skills')</span></h3>
    <div class="container skills">
        <div class="row">
            <div class="col-sm-4 skill"><div class="ps"></div></div>
            <div class="col-sm-4 skill"><div class="ai"></div></div>
            <div class="col-sm-4 skill"><div class="id"></div></div>
        </div>
    </div>
</section>

<section id="projects" class="projects-wrapper">
    <div class="flower-top"></div>
    <div class="flower-bot"></div>
    <h3 class="title-with-lines"><span>@lang('main.portfolio')</span></h3>
    <div class="container">
        <div class="row projects">
            @foreach($projects as $p)
                <div class="col-sm-4 col-md-3">
                    <a data-fancybox="gallery"
                       href="{{ $p['image_url'] }}"
                       style="display: block">
                        <div class="project">
                            <div class="project-image-wrapper">
                                <div class="project-image" style="background-image: url({{ $p['image_url'] }});"></div>
                            </div>
                            <h4 class="project-name">{{ $p['name'] }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script src="{{ mix('build/v2/js/app.js') }}"></script>
</body>
</html>
