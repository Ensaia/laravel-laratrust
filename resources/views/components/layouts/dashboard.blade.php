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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/4.9.1/css/adminlte.rtl.css" integrity="sha512-aLbnHw0O2W496in4VMIQNLESZTznUAqIvXK+sGYp524zRQcfs+ooipFL6oYW+/JGupUrt2LlWgUw3lRLzM3a4A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.12.0/styles/overlayscrollbars.css" integrity="sha512-DO1BiS5hUKndtUOGESflFVH4R55hT8FFn+XF6kH7T6IluRn3sVNjwuTxop46WCtVsr/Zef+xLdLbwzX76xx+lw==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <span class="fw-semibold fs-6" id="hijri-date-span"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3">
                {{ $slot }}
            </div>
        </div>
    </main>
    <!--Footer-->
@include('components.adminlte.footer')
<!--Footer-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/4.9.1/js/adminlte.js" integrity="sha512-0kI5hsA2SWCV8XY0KeaJ66ErIEXUwmMP4vqkfcd7Tr/K7OREeQ/5PN65z5r+Z5wDeV8Zt2LqVoOd75K4EAH48A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.12.0/browser/overlayscrollbars.browser.es6.js" integrity="sha512-BQuo90F0VDIseI3ZbZYrv613kc3dvcoONsj0T7j8GKHOSGWTkXk5/OKzqFHRsT4UEwnf3BokFZO1ALol/SbM9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/js/all.js" integrity="sha512-YbiNgTNv2GVfwJwqGr9Xv9xWzPIEwaDOv3f2S6HFbRVeo/xuM87nKqkmBPctPP3sbvxv3EpNIRss+3gjEJbVrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.26.25/sweetalert2.all.js" integrity="sha512-On4hHYs/FYpqEYC5MTzp67RbZgiRuO50AAdVMOBygh1BeYc+GYE+ksqzoloSb5cf3HQVKPdmf7eGre6FO3L0ZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.26.25/sweetalert2.all.js" integrity="sha512-On4hHYs/FYpqEYC5MTzp67RbZgiRuO50AAdVMOBygh1BeYc+GYE+ksqzoloSb5cf3HQVKPdmf7eGre6FO3L0ZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.26.25/sweetalert2.all.js" integrity="sha512-On4hHYs/FYpqEYC5MTzp67RbZgiRuO50AAdVMOBygh1BeYc+GYE+ksqzoloSb5cf3HQVKPdmf7eGre6FO3L0ZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.5.1/chart.js" integrity="sha512-Zq6NyYQo/tZH8mWDjdNhKiI0+B3mGoo46/asQcg2N2GSr6Dvrf/UfoWDTC1cOphlrAYuBZWymbKXTIXHsuz0UA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="application/javascript" src="{{ asset('js/dashboard-script.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/hijri-date.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/back-to-top.js') }}"></script>
{{--type="application/javascript"--}}
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
