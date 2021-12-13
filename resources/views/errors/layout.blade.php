<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Montserrat', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }


            .title {
                font-family: Montserrat;
                font-style: normal;
                font-weight: bold;
                font-size: 400px;
                line-height: 488px;
                color: transparent;
                /* identical to box height */
                -webkit-text-stroke: 5px #182857;
                margin: 1rem 0;
            }
            .message {
                font-family: Montserrat;
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 29px;
                color: #182857;
            }

            .link {
                display: inline-block;
                font-family: Montserrat;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 24px;
                text-align: center;
                color: #FFFFFF;
                background-color: #182857;
                text-decoration: none;
            }
        </style>
    </head>
    {{-- TODO: entities [img] --}}
    <body style="background-image: url('/images/background.png')">
        <div class="flex-center position-ref full-height">
            <div class="content" >
                <p class="title"> @yield('code') </p>
                {{-- TODO: entities [text] --}}
                <p class="message">@yield('message')</p>

                <a class="link" href="/">{{ __('error.link') }}</a>
            </div>
        </div>
    </body>
</html>
