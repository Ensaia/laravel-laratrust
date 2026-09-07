<!DOCTYPE html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel, Laratrust">
    <meta name="author" content="Mohammed Ensaia">
    <meta name="generator" content="Laravel">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon" sizes="32x32"/>
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/4.9.1/css/adminlte.rtl.css" integrity="sha512-aLbnHw0O2W496in4VMIQNLESZTznUAqIvXK+sGYp524zRQcfs+ooipFL6oYW+/JGupUrt2LlWgUw3lRLzM3a4A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/14.2.0/swiper-bundle.css" integrity="sha512-lZuYn1nIUGLk0a1UigT2YvdY3gux5InRGr/CUJCceLe/SP0he7OVcqxL6wH0UgCpzq49LSb2cT2xc6gOqok7mA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.8.4/plyr.css" integrity="sha512-q0F6PlrMogvCMWJMi0XRoKD8yDTNtVadIvPd9Nw8kGJKOk84yhAJFyrSgbNn0QX8ntZNnnQoE5W5pIZTdoiU1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <div>
                <span class="fw-semibold fs-6" id="hijri-date-span"></span>
            </div>
        </div>
    </div>
</div>
<!-- HEADER -->
<div class="container py-1">
    <div class="row">
        <div class="col-md-12">
            <header class="pb-3 mb-0 border-bottom">
                {{-- bg-body-tertiary --}}
                <nav class="navbar navbar-expand-lg bg-dark rounded" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ route('homeIndex') }}">
                            <img src="{{ asset('images/laratrust-sidebar.png') }}" alt="{{ config('app.name') }}" height="30">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('homeIndex') }}">
                                        <span>{{ __('الرئيسية') }}</span>
                                        <span><i class="fa-solid fa-home"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                                        <span>{{ __('لوحة التحكم') }}</span>
                                        <span><i class="fa-solid fa-gauge-high"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('usersIndex') }}">
                                        <span>{{ __('المستخدمون') }}</span>
                                        <span><i class="fa-solid fa-users"></i></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" id="dark-mode-toggle">
                                        <span><i class="fa-solid fa-sun"></i></span>
                                        <span>|</span>
                                        <span><i class="fa-solid fa-moon"></i></span>
                                    </a>
                                </li>
                                @if(Auth()->check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('homeUserProfile') }}">
                                            <span>{{ Auth()->user()->name }}</span>
                                            <span><i class="fa-regular fa-user"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <form action="{{ route('logout') }}" method="post" class="d-flex">
                                            @csrf
                                            @method('post')
                                            <button class="btn btn-link nav-link" type="submit">
                                                <span>{{ __('تسجيل الخروج') }}</span>
                                                <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                            </button>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">
                                            <span>{{ __(' تسجيل الدخول ') }}</span>
                                            <span><i class="fa-solid fa-right-to-bracket"></i></span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                {{-- --}}
            </header>
        </div>
    </div>
</div>
<!-- CONTENT -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{ $slot }}
        </div>
    </div>
</div>
<!-- FOOTER -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <footer class="pt-3 my-5 text-body-secondary border-top">
                    <div class="d-flex justify-content-between">
                        <div>
                            <strong>
                                <a href="{{ route('homeIndex') }}" class="text-decoration-none">
                                    <img
                                        src="{{ asset('images/laratrust-footer.png') }}"
                                        alt="laratrust-footer"
                                        class="text-black"
                                    />
                                </a>
                            </strong>
                            <span style="color: rgba( 0, 0, 0, 0.50);">&nbsp;{{ date('Y') }}&copy;</span>
                        </div>
                        <div>
                            <a href="#!" class="text-decoration-none text-black">
                                <span><i class="fa-brands fa-square-facebook fa-lg"></i></span>
                            </a>
                            <a href="#!" class="text-decoration-none text-black">
                                <span><i class="fa-brands fa-x-twitter fa-lg"></i></span>
                            </a>
                            <a href="#!" class="text-decoration-none text-black">
                                <span><i class="fa-brands fa-square-github fa-lg"></i></span>
                            </a>
                            <a href="#!" class="text-decoration-none text-black">
                                <span><i class="fa-brands fa-square-whatsapp fa-lg"></i></span>
                            </a>
                            <a href="#!" class="text-decoration-none text-black">
                                <span><i class="fa-brands fa-telegram fa-lg"></i></span>
                            </a>
                        </div>
                    </div>
                </footer>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/4.9.1/js/adminlte.js" integrity="sha512-0kI5hsA2SWCV8XY0KeaJ66ErIEXUwmMP4vqkfcd7Tr/K7OREeQ/5PN65z5r+Z5wDeV8Zt2LqVoOd75K4EAH48A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/js/all.js" integrity="sha512-YbiNgTNv2GVfwJwqGr9Xv9xWzPIEwaDOv3f2S6HFbRVeo/xuM87nKqkmBPctPP3sbvxv3EpNIRss+3gjEJbVrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/14.2.0/swiper-bundle.js" integrity="sha512-VN5TzqxJ3XnK1HHjCz9FUlCvVoI7gB8M3wo7Cso5P+JnwuLIM5FOh1LU8FSZ+QobLmI9895yD2rFGIs/1c35Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.8.4/plyr.js" integrity="sha512-sKws1u9CpOE8ouFHr3g4k5/RUYzUQBrEV7gQepdU1fpe7oSaI7B5IIT/GhxUyjYQgD4XiDM/408v8YfnN1YlEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.8.4/plyr.polyfilled.js" integrity="sha512-+glTdCHzzRAN6KgG6qE7BE+SMMAz2FXVIOtczUKyNUNcRjqzxxtyNmtNz5tZiwOGGxAsBuZkakKf3qdqZ3yzpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="application/javascript" src="{{ asset('js/back-to-top.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/app-script.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/hijri-date.js') }}"></script>
</body>
</html>

