<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <link rel="shortcut icon" href="/img/main/aremu-favicon.png" type="image/x-icon">
        <title>Aremu Smog</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128909872-8"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-128909872-8');
        </script>
    </head>
    <body>
        <div class="website-wrapper">
            <div class="home">
                <div class="container">
                    <div class="col-12 intro">
                        <a href="/"><img src="/img/main/Aremu Smog Logo.png" class="logo" alt="Aremu Smog logo"></a>
                        On a daily journey <br/> to  find 'ME' through <br/> CODES  and <span class="cancel">DESIGN</span> 
                    </div>
                    @include('inc.navigation')
                </div>
            </div>
        </div>
        
    </body>
    <script src="/js/app.js"></script>
</html>
