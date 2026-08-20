<x-layouts.dashboard>
    <!-- Profile 1 - Bootstrap Brain Component -->
    <x-ui.success></x-ui.success>
    <x-ui.errors></x-ui.errors>
    <section class="py-2 py-md-2 py-xl-1">
            <div class="row gy-4 gy-lg-0">
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="card widget-card border-light shadow-sm">
                                <div class="card-header text-bg-dark">{{ __('مرحبا') }} {{ Auth()->user()->name }}</div>
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <img src="{{ asset("images/user128x128.png") }}"
                                             class="img-fluid rounded-circle" alt="{{ Auth()->user()->name }}">
                                    </div>
                                    <h5 class="text-center mb-1">{{ Auth()->user()->name }}</h5>
                                    <div class="text-center text-secondary mb-2 d-flex justify-content-center">
                                        @if(Auth()->user()->isEmailVerified())
                                            <div><span>{{ Auth()->user()->email }}</span></div>
                                            <div><span><i class="fa-solid fa-check-circle fa-lg"></i></span></div>
                                        @else
                                            <div><span>{{ __('يرجى التحقق من البريد الإلكتروني') }}</span></div>
                                        @endif
                                    </div>
                                    <h5 class="text-center mb-1 fw-semibold">{{ __('مطور برمجيات ويب BACK-END') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card widget-card border-light shadow-sm">
                                <div class="card-header text-bg-dark">{{ __('مواقع التواصل الإجتماعي') }}</div>
                                <div class="card-body">
                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                        <span><i class="fa-brands fa-square-facebook fa-lg"></i></span>
                                    </a>
                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                        <span><i class="fa-brands fa-x-twitter fa-lg"></i></span>
                                    </a>
                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                        <span><i class="fa-brands fa-square-github fa-lg"></i></span>
                                    </a>
                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                        <span><i class="fa-brands fa-square-whatsapp fa-lg"></i></span>
                                    </a>
                                    <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                        <span><i class="fa-brands fa-telegram fa-lg"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8 col-xl-9">
                    {{-- update profile info --}}
                    <div class="card widget-card border-light shadow-sm">
                        <div class="card-header">{{ __('تحديث البيانات') }}</div>
{{--                        <form action="{{ route('user-profile-information.update') }}" method="post">--}}
                        <form action="{{ route('updateProfileInformation') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body p-4 row g-3">
                                <div class="col-6 col-lg-6 col-md-6">
                                    <label for="name" class="form-label">{{ __('الاسم') }}</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="{{ Auth()->user()->name }}" placeholder="{{ __('الاسم') }}">
                                </div>
                                <div class="col-6 col-lg-6 col-md-6">
                                    <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                           value="{{ Auth()->user()->email }}"
                                           placeholder="{{ __('البريد الإلكتروني') }}">
                                </div>
{{--                                <div class="col-6 col-lg-6 col-md-6">--}}
{{--                                    <input type="hidden" name="update_information" value="update_information">--}}
{{--                                </div>--}}
                            </div>
                            <div class="card-footer">
                                <div class="col-12">
                                    <x-ui.edit-button></x-ui.edit-button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- update user password --}}
                    <div class="card widget-card border-light shadow-sm mt-3">
                        <div class="card-header">{{ __('تحديث كلمة المرور') }}</div>
                        <form action="{{ route('updateUserPassword') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body p-4 row g-3">
                                <div class="col-4 col-lg-4 col-md-4">
                                    <label for="currentPassword"
                                           class="form-label">{{ __('كلمة المرور الحالية') }}</label>
                                    <input type="password" class="form-control" name="current_password" id="current-password"
                                           placeholder="{{ __('كلمة المرور الحالية') }}">
                                </div>
                                <div class="col-4 col-lg-4 col-md-4">
                                    <label for="newPassword"
                                           class="form-label">{{ __('كلمة المرور الجديدة') }}</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="{{ __('كلمة المرور الجديدة') }}">
                                </div>
                                <div class="col-4 col-lg-4 col-md-4">
                                    <label for="confirmPassword"
                                           class="form-label">{{ __('تأكيد كلمة المرور') }}</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="confirm-password"
                                           placeholder="{{ __('تأكيد كلمة المرور') }}">
                                </div>
{{--                                <div class="col-4 col-lg-4 col-md-4">--}}
{{--                                    <input type="hidden" name="update_password" value="update_password">--}}
{{--                                </div>--}}
                            </div>
                            <div class="card-footer">
                                <div class="col-12">
                                    <x-ui.edit-button></x-ui.edit-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
    </section>
</x-layouts.dashboard>
