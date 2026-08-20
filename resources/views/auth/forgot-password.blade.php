<x-layouts.auth>
    <div class="col-md-12 py-5">
            <div class="text-center">
                <span class="fs-3 fw-semibold">{{ __('إرسال رابط إعادة تعيين كلمة المرور') }}</span>
            </div>
            @include('auth.status')
            <form method="post" action="{{ route('password.email') }}" class="row g-3 mt-2">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}" placeholder="{{ __('البريد الإلكتروني') }}">

                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 mt-3 d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-dark">
                        <span class="p-2">{{ __('إرسال الرابط') }}</span>
                        <span><i class="fa-solid fa-link"></i></span>
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
                    <a href="{{ route('register') }}" class="text-lg btn btn-dark">
                        {{ __(' إنشاء حساب') }}
                    </a>
                </div>
            </div>
    </div>
</x-layouts.auth>
