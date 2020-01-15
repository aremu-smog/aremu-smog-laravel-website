<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">

        <title>Aremu Smog</title>
    </head>
    <body>
        <div class="website-wrapper">
            <div class="home">
                <div class="container">
                    <div class="col-9 intro">
                        <a href="/"><img src="/img/main/Aremu Smog Logo.png" class="logo" alt="Aremu Smog logo"></a>
                        On a daily journey <br/>to find 'ME' through CODES and <span class="cancel">DESIGN</span> 
                    </div>
                    @include('inc.navigation')
                </div>
            </div>
        </div>
        
    </body>
</html>
