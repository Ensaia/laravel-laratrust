<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="AdminLTE 4 | Layout RTL"/>
    <meta name="description" content="">
    <meta name="keywords" content=""/>
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.13.2">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon" sizes="32x32"/>
    <meta name="theme-color" content="#712cf9">
    <meta name="supported-color-schemes" content="light dark"/>
    <link rel="preload" href="{{ asset('css/adminlte.rtl.min.css') }}" as="style"/>
    <link rel="stylesheet" href="{{ asset('css/overlayscrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.rtl.min.css') }}">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <!--Header-->
@include('components.adminlte.header')
<!--Header-->
    <!--Sidebar-->
@include('components.adminlte.sidebar')
<!--Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <!--BREADCRUMB-->

        <!--BREADCRUMB-->
        <div class="app-content">
            <div class="container-fluid py-5">
                {{ $slot }}
            </div>
        </div>
    </main>
    <!--Footer-->
@include('components.adminlte.footer')
<!--Footer-->
</div>
<script type="application/javascript" src="{{ asset('js/overlayscrollbars.browser.es6.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/adminlte.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/fontawesome.all.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/chart.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/dashboard-script.js') }}"></script>
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },

            });
        }

    }) // DOMContentLoaded end
</script>
</body>

</html>
