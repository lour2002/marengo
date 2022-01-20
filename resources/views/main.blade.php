<!DOCTYPE html>
<html class="page" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Marengo</title>

        {{-- SEO tags --}}
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    {{-- TODO: to add '--active-modal' class --}}
    <body class="page__body">
        <input name="type-drink" id="vermouth" type="radio" class="visually-hidden" checked>
        <input name="type-drink" id="sparkling" type="radio" class="visually-hidden" >

        <x-layout.header />

        <main class="mt-[60px] xl:mt-[55px] bg-beige">
            <h1 class="visually-hidden">Marengo</h1>
            <x-section.bottles />
            <x-section.products />
            <x-section.coctails />
            <x-section.history />
        </main>

        <x-layout.footer />

        <x-modal.eighteen />
        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
