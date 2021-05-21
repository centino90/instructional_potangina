<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-light">
    @include('layouts.header')
    <section class="container-fluid">
        <div class="row">
            @include('layouts.sidebar-left')
            <section class="app__main px-0 bg-light">
                @include('layouts.content-header')

                <main id="app__main-content" class="px-md-4 mb-5 pb-2">
                    @yield('content')
                </main>
            </section>
        </div>
    </section>

    @include('layouts.footer')

    <!-- off screens -->
    {{-- @include('layouts.guide') --}}

    @yield("script")
    <script>
        window.onscroll = function() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("app__header").style = "opacity: .9"
            } else {
                document.getElementById("app__header").style = "opacity: 1"
            }
        };

        let appMenuClickCount = 0;
        document.getElementById("app__menu-btn").addEventListener("click", function() {
            appMenuClickCount++
            document.querySelector("html").classList.toggle("app__sidebar-left-toggled")
        })

    </script>
</body>

</html>
