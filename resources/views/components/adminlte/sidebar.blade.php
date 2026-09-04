<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="{{ route('dashboard') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="{{ asset('images/laratrust-sidebar.png') }}"
                alt="laratrust-sidebar"
                class="brand-image"
            />
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false"
            >
                <li class="nav-header">{{ __('القائمة الرئيسية') }}</li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" aria-current="page" href="{{ route('homeIndex') }}">
                        <span>{{ __('الرئيسية') }}</span>
                        <span><i class="fa-solid fa-home"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('dashboard') }}">
                        <span>{{ __('لوحة التحكم') }}</span>
                        <span><i class="fa-solid fa-gauge-high"></i></span>
                    </a>
                </li>  <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('usersIndex') }}">
                        <span>{{ __('المستخدمون') }}</span>
                        <span><i class="fa-solid fa-users"></i></span>
                    </a>
                </li>
                </li>  <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('loginLogIndex') }}">
                        <span>{{ __('سجل الدخول') }}</span>
                        <span><i class="fa-solid fa-address-book"></i></span>
                    </a>
                </li>
                </li>  <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('actionLogIndex') }}">
                        <span>{{ __('سجل العمليات') }}</span>
                        <span><i class="fa-solid fa-address-book"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('rolesIndex') }}">
                        <span>{{ __('الأدوار') }}</span>
                        <span><i class="fa-solid fa-user-gear"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('permissionsIndex') }}">
                        <span>{{ __('الصلاحيات') }}</span>
                        <span><i class="fa-solid fa-user-lock"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('postsIndex') }}">
                        <span>{{ __('المنشورات') }}</span>
                        <span><i class="fa-solid fa-book"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-between" href="{{ route('prayerTimeDefaultSettingsIndex') }}">
                        <span>{{ __('إعدادات مواقيت الصلاة') }}</span>
                        <span><i class="fa-solid fa-calendar-days"></i></span>
                    </a>
                </li>
                    </ul>
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
