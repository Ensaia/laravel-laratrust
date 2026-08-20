<x-layouts.auth>
    <x-ui.errors></x-ui.errors>
<div class="col-md-12 py-5">
    <div class="text-center">
        <span class="fs-3 fw-semibold">{{ __(' تسجيل الدخول ') }}</span>
    </div>
    <form method="post" action="{{ route('register') }}" class="row g-3 mt-2">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('الاسم') }}</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}" placeholder="{{ __('الاسم') }}">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}" placeholder="{{ __('البريد الإلكتروني') }}">

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('كلمة المرور') }}</label>
            <input type="password" name="password" class="form-control" placeholder="{{ __('كلمة المرور') }}" required>

            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('تأكيد كلمة المرور') }}</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('تأكيد كلمة المرور') }}" required>

            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3 d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-dark">
                <span class="p-2">{{ __('إنشاء حساب') }}</span>
                <span><i class="fa-solid fa-user-plus"></i></span>
            </button>
        </div>
    </form>
    <div class="d-flex justify-content-between mt-2">
        <div>
            <a href="{{ route('login') }}" class="text-sm btn btn-dark">
                {{ __('تسجيل الدخول') }}
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
