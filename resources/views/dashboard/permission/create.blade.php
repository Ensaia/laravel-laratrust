<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
<div class="row mt-3">
  <div class="col-md-12">
        <div class="card">
            <form class="form" action="{{ route('permissionStore') }}" method="post">
                @csrf
                <div class="card-body row g-3">
                    <div class="col-md-12">
                        <label for="name" class="form-label">{{ __('اﻻسم') }}</label>
                        <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" placeholder="{{ __('اﻻسم') }}"
                            value="{{ old('name') }}" />
                        @error('name')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="display-name" class="form-label">{{ __('اسم العرض') }}</label>
                        <input type="text" name="display_name" id="display-name" class="form-control  @error ('display_name') is-invalid @enderror" placeholder="{{ __('اسم العرض') }}" value="{{ old('display_name') }}" />
                        @error('display_name')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">{{ __('الوصف') }}</label>
                        <textarea rows="3" name="description" id="description" class="form-control  @error ('description') is-invalid @enderror"
                            placeholder="{{ __('الوصف') }}">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-12">
                       @include('components.ui.create-button')
                    </div>
                </div>
            </form>
        </div>
  </div>
</div>
</x-layouts.dashboard>
