<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="javascript:void(0);" role="button">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('homeIndex') }}">
                    <span>{{ __('الرئيسية') }}</span>
                    <span><i class="fa-solid fa-home"></i></span>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <span>{{ __('لوحة التحكم') }}</span>
                    <span><i class="fa-solid fa-gauge-high"></i></span>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('usersIndex') }}" class="nav-link">
                    <span>{{ __('المستخدمون') }}</span>
                    <span><i class="fa-solid fa-users"></i></span>
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">

            <!--begin::dark mode Menu Dropdown-->
{{--            <x-adminlte.dark-mode></x-adminlte.dark-mode>--}}
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" id="dark-mode-toggle">
                    <span><i class="fa-solid fa-sun"></i></span>
                    <span>|</span>
                    <span><i class="fa-solid fa-moon"></i></span>
                </a>
            </li>
            <!--end::dark mode Menu Dropdown-->
            <!-- -->
            <li class="nav-item">
                <a href="{{ route('userProfile') }}" class="nav-link">
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
            <!-- -->

        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
