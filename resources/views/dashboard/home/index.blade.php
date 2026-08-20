<x-layouts.dashboard>
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
            <x-ui.info-box icon="fa-solid fa-users" text="المستخدمون" :count=$users_count></x-ui.info-box>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <x-ui.info-box icon="fa-solid fa-user-gear" text="الأدوار" :count=$roles_count></x-ui.info-box>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <x-ui.info-box icon="fa-solid fa-user-lock" text="الأذونات" :count=$permissions_count></x-ui.info-box>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <x-ui.info-box icon="fa-solid fa-book" text="المنشورات" :count=$posts_count></x-ui.info-box>
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
