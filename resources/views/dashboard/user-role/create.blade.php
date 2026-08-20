<x-layouts.dashboard>
    <x-ui.errors></x-ui.errors>
    <x-ui.success></x-ui.success>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="{{ route('userRoleStore',request()->user) }}" method="post" class="g-3">
                @csrf
                <div class="card">
                    <div class="card-body">
                            <div>
                                <label for="role-id" class="form-label">اﻷدوار</label>
                                <select class="form-control" name="role_id" id="role-id" multiple>
                                    <option disabled selected>اختار دورا</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
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
            <span class="fs-6 fw-semibold">{{ __('الأدوار الحالية:') }}</span>
            <ul class="nav mt-1">
                @foreach( $user_roles as  $roles)
                    @foreach( $roles->roles as  $role)
                        <li class="nav-item">
                            <span class="badge bg-dark fs-6 m-1">{{ $role->name }}</span>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <span class="fs-6 fw-bold mt-3">{{ __('لا يسمح بتكرار الأدوار الرجاء الانتباه!!!') }}</span>
        </div>
    </div>
</x-layouts.dashboard>
