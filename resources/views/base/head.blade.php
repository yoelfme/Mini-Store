<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>
        @section('title')
            Tienda
        @show
    </title>

    <meta name="description" content="Tienda">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>

    <!-- Icons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/plugins.css') }}
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('assets/css/themes.css') }}
    {{ HTML::style('assets/css/themes/flat.css') }}
    {{ HTML::style('assets/css/jquery.minicolors.css') }}
    {{ HTML::style('assets/css/getorgchart.css') }}
    {{ HTML::style('app/css/generic/app.css') }}

    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    {{ HTML::script('assets/js/vendor/modernizr-2.8.3.min.js') }}
</head>