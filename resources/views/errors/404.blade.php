<!DOCTYPE html>

<!--[if IE 9]>         <html lang="es" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Tienda</title>

        <meta name="description" content="Tienda">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
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

        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/plugins.css') !!}
        {!! Html::style('assets/css/main.css') !!}
        {!! Html::style('assets/css/themes.css') !!}
    </head>
    <body>
        <!-- Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        {!! Html::image('assets/img/placeholders/layout/error_full_bg.jpg','Full Background', ['class'=>'full-bg full-bg-bottom animation-pulseSlow']) !!}
        <!-- END Full Background -->

        <!-- Error Container -->
        <div id="error-container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="text-light animation-fadeInQuick"><strong>Andas perdido?</strong></h1>
                    <h2 class="text-muted animation-fadeInQuickInv"><em>Lo sentimos pero esta pagina no ha podido ser encontrada</em></h2>
                </div>
                {{--<div class="col-md-4 col-md-offset-4">--}}
                    {{--<a href="#" class="btn btn-effect-ripple btn-default"><i class="fa fa-arrow-left"></i> Regresar</a>--}}
                {{--</div>--}}
            </div>
        </div>
        <!-- END Error Container -->
    </body>
</html>