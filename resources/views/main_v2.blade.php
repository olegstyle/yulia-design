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
    <div class="book"></div>
</header>

<script src="{{ mix('build/v2/js/app.js') }}"></script>
</body>
</html>
