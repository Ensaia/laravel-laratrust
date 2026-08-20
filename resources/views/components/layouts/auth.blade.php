<!DOCTYPE html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.13.2">
    <title>Starter Template · Bootstrap v5.3</title>
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
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
    <script type="application/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/fontawesome.all.min.js') }}"></script>
</body>
</html>
