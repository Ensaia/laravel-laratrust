<x-layouts.auth>
    <x-ui.errors></x-ui.errors>
    @include('auth.status')
        <div class="col-md-12 py-5">
            <div class="text-center">
                <span class="fs-3 fw-semibold">{{ __(' تسجيل الدخول ') }}</span>
            </div>
            <form id="login-form" action="{{ route('login') }}" method="post" class="row g-3 mt-2">
                @csrf
                <div class="mb-3">
                        <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
                        <input type="email" id="email" class="form-control" placeholder="{{ __('البريد الإلكتروني') }}" name="email"
                             autocomplete="email" value="{{ __('mohammed@laravel.com') }}"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('كلمة المرور') }}</label>
                    <input type="password" id="password" class="form-control" placeholder="{{ __('كلمة المرور') }}" name="password" value="{{ __('password') }}"/>
                </div>
                <div class="mb-3 mt-3 d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-dark">
                        <span class="p-2">{{ __(' تسجيل الدخول ') }}</span>
                        <span><i class="fa-solid fa-right-to-bracket"></i></span>
                    </button>
                </div>
            </form>
            <div class="d-flex justify-content-between mt-2">
                <div>
                    <a href="{{ route('register') }}" class="text-lg btn btn-dark">
                        {{ __(' إنشاء حساب') }}
                    </a>
                </div>
                <div>
                    <a href="{{ route('password.request') }}" class="text-sm btn btn-dark">
                        {{ __('استعادة كلمة المرور') }}
                    </a>
                </div>
            </div>
        </div>
</x-layouts.auth>
