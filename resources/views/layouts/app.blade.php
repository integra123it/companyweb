<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="direction" lang="lang" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="direction" lang="lang" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="direction" lang="lang">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="base" />
        <meta name="description" content="Integra IT Ltd" />
        <meta name="keywords" content="Integra IT Ltd" />
        <title>123-it.com - Integra IT Ltd</title>
        <script src="/js/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />  
        <link href="/js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <link href="/css/stylesheet.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navtop')
        @include('layouts.header')
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>