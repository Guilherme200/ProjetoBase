<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Zapet MVP">
        <meta name="author" content="Lets up!">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name', "Zapet") }}@hasSection ('title') - @yield('title')@endif</title>

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
        <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon">

        <!-- Custom fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Main css -->
        <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

        @yield('header')
    </head>
    <body class="bg-gradient-primary">
        <div id="app">
            @include('layouts._partials.flash-messages')
            <vue-snotify></vue-snotify>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="@yield('content-size', 'col-xl-6 col-md-8')">
                        @hasSection ('content')
                            @yield('content')
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script src="{{ mix('assets/js/main.js') }}"></script>

        <!-- Page linked scripts -->
        @stack('page_linked_scripts')
    </body>
</html>
