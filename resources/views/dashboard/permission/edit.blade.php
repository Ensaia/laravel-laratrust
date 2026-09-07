<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
         <div class="row mt-3">
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
                        <a href="{{ route('permissionsIndex') }}">
                            <span>{{ __('الصلاحيات') }}</span>
                            <span><i class="fa-solid fa-user-lock"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('permissionEdit',request()->permission->id) }}">
                             <span>{{ __('تحديث بيانات صلاحيات') }}</span>
                    <span><i class="fa-solid fa-pen-to-square"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <form class="form" action="{{ route('permissionUpdate',$permission) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body row g-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">{{ __('اﻻسم') }}</label>
                            <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" placeholder="{{ __('اﻻسم') }}"
                                   value="{{ $permission->name }}" />
                            @error('name')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="display-name" class="form-label">{{ __('اسم العرض') }}</label>
                            <input type="text" name="display_name" id="display-name" class="form-control  @error ('display_name') is-invalid @enderror" placeholder="{{ __('اسم العرض') }}" value="{{ $permission->display_name }}" />
                            @error('display_name')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">{{ __('الوصف') }}</label>
                            <textarea rows="3" name="description" id="description" class="form-control  @error ('description') is-invalid @enderror"
                                      placeholder="{{ __('الوصف') }}">{{ $permission->description }}</textarea>
                            @error('description')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{ $permission->id }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12">
                            @include('components.ui.edit-button')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
