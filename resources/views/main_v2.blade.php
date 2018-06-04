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
    <div class="paper-xs"></div>
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
            <li><a class="btn btn-link" href="#contact-me">@lang('main.contacts')</a></li>
        </ul>

        <div class="language-switcher">
            @foreach (config('app.locales') as $lang)
                <a class="btn btn-link @if ($locale === $lang) active @endif"
                   href="{{ route('lang.change', ['lang' => $lang]) }}">
                    {{ strtoupper($lang) }}
                </a>
            @endforeach
        </div>

        <div class="designer">
            <div class="designer-flowers"></div>
            <div class="designer-dark">DESIGNER</div>
            <div class="designer-light">DESIGNER</div>
        </div>

        <div class="clearfix"></div>

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
            <a href="skype:{{ $skype }}" class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                <i class="fab fa-skype"></i>
                <span>{{ $skype }}</span>
            </a>
            <a href="tel:{{ $phone }}" class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                <i class="fab fa-whatsapp"></i>
                <span>{{ $phone }}</span>
            </a>
            <a href="mailto:{{ $email }}" class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <i class="fas fa-envelope"></i>
                <span>{{ $email }}</span>
            </a>
        </div>
    </div>

    <div class="book"></div>

    <a href="#about_me" class="go-to-about-me aos-init aos-animate" data-aos="fade-up" data-aos-duration="2500"></a>
</header>

<section id="about_me" class="about-me">
    <div class="flower-top"></div>
    <div class="flower-bot"></div>

    <h3 class="title-with-lines aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
        <span>@lang('main.about_me')</span>
    </h3>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="photo-wrapper aos-init aos-animate" data-aos="zoom-down" data-aos-duration="1000">
                    <div class="photo-border"></div>
                    <div class="photo"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="info aos-init aos-animate" data-aos="zoom-right" data-aos-duration="1500">
                    <p>{!! $about_me_short !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="skills-wrapper">
    <div class="gradient"></div>
    <h3 class="title-with-lines aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000"><span>@lang('main.my_skills')</span></h3>
    <div class="container skills">
        <div class="row">
            <div class="col-xs-12 col-sm-4 skill aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000"><div class="ps"></div></div>
            <div class="col-xs-6 col-sm-4 skill aos-init aos-animate" data-aos="fade-down" data-aos-duration="2000"><div class="ai"></div></div>
            <div class="col-xs-6 col-sm-4 skill aos-init aos-animate" data-aos="fade-right" data-aos-duration="3000"><div class="id"></div></div>
        </div>
    </div>
</section>

<section id="portfolio" class="projects-wrapper">
    <div class="flower-top"></div>
    <div class="flower-bot"></div>
    <h3 class="title-with-lines aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000"><span>@lang('main.portfolio')</span></h3>
    <div class="container">
        <div class="row projects">
            @foreach($projects as $p)
                <div class="col-sm-4 col-md-3 col-xs-6">
                    <a data-fancybox="gallery"
                       href="{{ $p['image_url'] }}"
                       style="display: block"
                       data-aos="flip-left"
                       data-aos-duration="900"
                       class="aos-init aos-animate">
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

<section id="contacts" class="contacts-wrapper">
    <div class="flower-top"></div>
    <div class="flower-bot-left"></div>
    <div class="flower-bot-right"></div>
    <div class="book"></div>
    <div class="wizitka"></div>
    <div class="phone"></div>
    <div class="paper"></div>
    <div class="pin"></div>
    <div class="mouse"></div>
    <div class="copyright"><span>Tylyk Yulia. All rights reserved © 2017 - {{ date('Y') }}</span></div>

    <div class="container">
        <form id="contact-me" class="contact-form form-horizontal" method="POST" action="{{ url('/angi/contact/send') }}">
            <h3 class="title-with-lines aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000"><span>@lang('main.contacts')</span></h3>

            <div class="form-group drop-margin-xs">
                <div class="col-xs-12 col-sm-6 col-md-5 margin-bottom-xs--15">
                    <input id="contact-name" name="name" class="form-control" placeholder="@lang('voyager.generic.name')">
                </div>
                <div class="hidden-xs hidden-sm col-md-2">&nbsp;</div>
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <input id="contact-email" name="email" type="email" class="form-control" placeholder="@lang('voyager.generic.email')">
                </div>
            </div>
            <div class="form-group drop-margin-xs">
                <div class="col-xs-12">
                    <textarea id="contact-message" name="message" class="form-control" rows="3" placeholder="@lang('main.message')"></textarea>
                </div>
            </div>

            <div class="form-group drop-margin-xs">
                <div class="col-xs-12">
                    {!! Recaptcha::render() !!}
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-link btn-main" type="submit">@lang('main.send')</button>
            </div>
        </form>
    </div>
</section>

<script src="{{ mix('build/v2/js/app.js') }}"></script>
</body>
</html>
