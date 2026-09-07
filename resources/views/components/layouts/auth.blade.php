<!DOCTYPE html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.13.2">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon" sizes="32x32"/>
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/4.9.1/css/adminlte.rtl.css" integrity="sha512-aLbnHw0O2W496in4VMIQNLESZTznUAqIvXK+sGYp524zRQcfs+ooipFL6oYW+/JGupUrt2LlWgUw3lRLzM3a4A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .login,
.image {
    min-height: 100vh;
}

.bg-image {
    background-image: url('{{ asset('images/auth.png') }}');
    background-size: cover;
    background-position: center center;
}
    </style>
</head>

<body>
    <main class="container-fluid bg-transparent">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto bg-transparent">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/4.9.1/js/adminlte.js" integrity="sha512-0kI5hsA2SWCV8XY0KeaJ66ErIEXUwmMP4vqkfcd7Tr/K7OREeQ/5PN65z5r+Z5wDeV8Zt2LqVoOd75K4EAH48A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/js/all.js" integrity="sha512-YbiNgTNv2GVfwJwqGr9Xv9xWzPIEwaDOv3f2S6HFbRVeo/xuM87nKqkmBPctPP3sbvxv3EpNIRss+3gjEJbVrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
