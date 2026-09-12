<x-layouts.dashboard>
    <div class="row">
        <div class="cold-md-12">
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <span>{{ __('الرئيسية') }}</span>
                            <span><i class="fa-solid fa-gauge-high"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            @if (session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div class="d-flex justify-content-between">
                        <div class="fs-6 fw-semibold">{{ session('error') }}</div>
                        <div><i class="fa-solid fa-triangle-exclamation fa-lg"></i></div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-dark elevation-1 text-white"><i class="fa-solid fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('المستخدمون') }}</span>
                    <span class="info-box-number">{{ $users_count }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-dark elevation-1 text-white"><i class="fa-solid fa-user-gear"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('الأدوار') }}</span>
                    <span class="info-box-number">{{ $roles_count }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-dark elevation-1 text-white"><i class="fa-solid fa-user-lock"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('الأذونات') }}</span>
                    <span class="info-box-number">{{ $permissions_count }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-dark elevation-1 text-white"><i class="fa-solid fa-book"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{ __('المنشورات') }}</span>
                    <span class="info-box-number">{{ $posts_count }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <canvas id="login-platform-count-chart"></canvas>
        </div>
        <div class="col-md-4">
            <canvas id="login-browser-count-chart"></canvas>
        </div>
        <div class="col-md-4">
            <canvas id="users-count-chart"></canvas>
        </div>
    </div>
</x-layouts.dashboard>
