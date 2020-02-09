<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="/img/main/aremu-favicon.png" type="image/x-icon">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128909872-8"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-128909872-8');
        </script>
        <title>Aremu Smog</title>
    </head>
    <body>
        <div class="website-wrapper">
            <div class="row">
                <div class="col-4 sidebar">
                        <div class="container">
                            <a href="/"><img src="/img/main/Aremu Smog Logo.png" class="logo" alt="Aremu Smog logo"></a>
                            @include('inc.navigation')
                        </div>
                    </div>
                    <div class="col-8 content-area">
                        <div class="container">
                            <p class="page-heading">@yield('heading')</p>
                            <div>
                                @yield('page-content')
                            </div>
                        </div>
                    </div>
            </div>
            
        </div>
        
    </body>
    <script src="/js/app.js"></script>
</html>
