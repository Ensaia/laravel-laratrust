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
                        <a href="{{ route('usersIndex') }}">
                            <span>{{ __('المستخدمون') }}</span>
                            <span><i class="fa-solid fa-users"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('userPermissionsIndex',request()->user->id) }}">
                            <span>{{ __('صلاحيات المستخدم') }}</span>
                            <span><i class="fa-solid fa-user-lock"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('userPermissionCreate',request()->user->id) }}">
                            <span>{{ __('إضافة صلاحيات للمستخدم') }}</span>
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
            <form action="{{ route('userPermissionStore',request()->user) }}" method="post" class="g-3">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <label for="role-id" class="form-label">{{ __('الصلاحيات') }}</label>
                            <select class="form-control" id="permission-id" name="permission_id" multiple>
                                <option selected disabled>{{ __('اختار صلاحيات') }}</option>
                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <x-ui.create-button></x-ui.create-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <span class="fs-6 fw-semibold">{{ __('الصلاحيات الحالية:') }}</span>
            <ul class="nav mt-1">
                @foreach( $user_permissions as  $permission)
                    @foreach( $permission->permissions as  $permission)
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
            <span class="fs-6 fw-bold mt-3">{{ __('لا يسمح بتكرار الصلاحيات الرجاء الانتباه!!!') }}</span>
        </div>
    </div>
</x-layouts.dashboard>
