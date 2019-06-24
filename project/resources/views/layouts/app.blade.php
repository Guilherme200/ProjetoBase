<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Zapet MVP">
    <meta name="author" content="Lets up!">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', "Zapet") }}@hasSection ('title') - @yield('title')@endif
    </title>

    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

    @yield('header')
</head>

<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <vue-snotify></vue-snotify>

            @include('layouts._partials.sidebar.sidebar')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @include('layouts._partials.topbar.navbar')
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @include('layouts._partials.flash-messages')

                        @yield('breadcrumb')
                        @yield('page-header')
                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Zapet {{ date('Y') }}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        @include('layouts._partials.scroll_to_top')

        <!-- Logout Modal-->
        @include('layouts._partials.logout_modal')
    </div>

    <!-- Core JS -->
    <script src="{{ mix('assets/js/main.js') }}"></script>

    <!-- Page linked scripts -->
    @stack('page_linked_scripts')
</body>

</html>
