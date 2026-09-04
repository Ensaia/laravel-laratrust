<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
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
                    <li class="breadcrumb-item">
                        <a href="{{ route('prayerTimeDefaultSettingsIndex') }}">
                            <span>{{ __('إعدادات مواقيت الصلاة') }}</span>
                            <span><i class="fa-solid fa-calendar-days"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="">
                <span class="fw-semibold">{{ __(' المدينة الحالية هي مدينة '.$city_name) }}</span>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <form class="form" action="{{ route('prayerTimeDefaultSettingsUpdate') }}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body row g-3">
                        <div class="">
                            <label for="name" class="form-label">{{ __('المدن') }}</label>
                            <select name="city_id" id="city-id" class="form-select @error ('city_id') is-invalid @enderror" placeholder="{{ __('العنوان') }}">
                                <option selected disabled>{{ __('اختر مدينة') }}</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->city_id }}" >{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                        </div>
{{--                        <div class="">--}}
{{--                            <label for="content" class="form-label">{{ __('تصحيح التاريخ الهجري') }}</label>--}}
{{--                            <input type="number" name="hijri_correction" id="hijri-correction" class="form-control  @error ('hijri_correction') is-invalid @enderror" placeholder="{{ __('تصحيح التاريخ الهجري') }}"  value="{{ $hijri_correction  }}"/>--}}
{{--                            @error('hijri_correction')--}}
{{--                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                    </div>
                    <div class="card-footer">
                        <div class="">
                            @include('components.ui.edit-button')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
