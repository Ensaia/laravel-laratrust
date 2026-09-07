<x-layouts.dashboard>
    <x-ui.errors></x-ui.errors>
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
                        <a href="{{ route('rolesIndex') }}">
                            <span>{{ __('الأدوار') }}</span>
                            <span><i class="fa-solid fa-user-gear"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('rolePermissionsIndex',request()->role->id) }}">
                            <span>{{ __('صلاحيات الدور') }}</span>
                            <span><i class="fa-solid fa-user-gear"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('rolePermissionCreate',request()->role->id) }}">
                            <span>{{ __('إضافة صلاحيات لدور') }}</span>
                            <span><i class="fa-solid fa-plus-square"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <form method="post" action="{{ route('rolePermissionStore',request()->role) }}" class="g-3">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <label for="permission-id" class="form-label">{{ __('اﻷذونات') }}</label>
                            <select class="form-select" name="permission_id" id="permission-id" multiple>
                                <option disabled selected>{{ __('اختار إذنا') }}</option>
                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12">
                            @include('components.ui.create-button')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <span class="fs-6 fw-semibold">{{ __('الأذونات الحالية:') }}</span>
            <ul class="nav mt-1">
                @foreach( $role_permissions as  $role_permission)
                    @foreach( $role_permission->permissions as  $permission)
                        <li class="nav-item">
                            <span class="badge bg-dark fs-6 m-1">{{ $permission->name }}</span>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <span class="fs-6 fw-bold mt-3">{{ __('لا يسمح بتكرار الأذن الرجاء الانتباه!!!') }}</span>
        </div>
    </div>
</x-layouts.dashboard>
