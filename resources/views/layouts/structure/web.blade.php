<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- https://aatrox-demo.vercel.app/html/index.html#demos -->
<!-- https://aatrox-demo.vercel.app/ -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Aatrox-admin-logo.svg" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Aatrox-admin-logo.svg" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Aatrox-admin-logo.svg" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <link rel="mask-icon" href="assets/images/Aatrox-admin-logo.svg" color="#D290F4" />
    <meta name="msapplication-TileColor" content="#D290F4" />
    <meta name="theme-color" content="#ffffff" />
    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <!-- <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <!-- tailwind css -->
    <!-- <link rel="stylesheet" href="assets/css/tailwind.bundle.min.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- estilos perzonalizados -->
    <!-- <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}" /> -->
    <!-- stilos livewire -->
    @livewireStyles

    {{-- Estilos de app-layout --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    {{-- Aqui era el error del modal --}}
    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('styles')
</head>

<body>
    <div class="loadscreen" id="preloader">
        <div class="loader spinner-bubble spinner-bubble-primary"></div>
    </div>
    <div class="app-admin-wrap-layout-2 layout-sidebar-large subheader-none">

        @include('layouts.structure.navbar')

        <div class="main-content-wrap">
            @include('layouts.structure.sidebar')

            <!-- Start:: content body-->
            <div class="main-content-body pt-10 px-4 flex flex-col sm:px-8">

                @yield('content')

                @include('layouts.structure.footer')
            </div>
            <!-- End:: content body-->
        </div>
    </div>
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="{{ asset('assets/js/vendors.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dropdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/modal.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard/dataSeries.script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/dashboard/dashboard.v1.script.js') }}"></script>
    @stack('modals')

    @livewireScripts
    @yield('scripts')
    
</body>

</html>
