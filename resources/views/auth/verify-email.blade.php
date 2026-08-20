<x-layouts.auth>

            <div class="col-md-12 py-5">
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success alert-dismissible fade show de-flex" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <div class="d-flex justify-content-between">
                            <div class="fs-6 fw-semibold"> تم إرسال رابط تحقق جديد إلى عنوان البريد الإلكتروني الذي قدمته أثناء التسجيل.</div>
                            <div><i class="fa-solid fa-circle-check fa-lg"></i></div>
                        </div>
                    </div>
                @endif
                <div class="card shadow-sm mt-2">
                    <div class="card-body text-center">
                        <div class="fs-5 fw-semibold"><span>{{ __('التحقق من البريد الإلكتروني') }}</span></div>
                        <div class="fs-5 fw-medium mt-2"> <span> {{ __('يجب عليك تأكيد بريدك الإلكتروني حتى يسمح لك بالمواصلة') }}</span></div>
                        <div class="fs-5 mt-2"> <span> {!! str(
                __('بريدك الإلكتروني هو `:email`', ['email' => request()->user()->email])
            )->markdown() !!}</span></div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <form method="post" action="{{ route('verification.send') }}">
                                    @csrf
                                    <div class="">
                                        <button type="submit" name="submit" class="btn btn-dark">
                                            <span>{{ __('إرسال رابط التحقق') }}</span>
                                            <span><i class="fa-solid fa-paper-plane"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <div>
                                        <div class="">
                                            <button type="submit" name="submit" class="btn btn-dark">
                                                <span>{{ __('تسجيل الخروج') }}</span>
                                                <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-layouts.auth>
