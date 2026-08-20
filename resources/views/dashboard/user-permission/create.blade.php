<x-layouts.dashboard>
    <x-ui.errors></x-ui.errors>
    <x-ui.success></x-ui.success>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="{{ route('userPermissionStore',request()->user) }}" method="post" class="g-3">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <label for="role-id" class="form-label">{{ __('الأذونات') }}</label>
                            <select class="form-control" id="permission-id" name="permission_id" multiple>
                                <option selected disabled>{{ __('اختار إذنا') }}</option>
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
            <span class="fs-6 fw-semibold">{{ __('الأذونات الحالية:') }}</span>
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
            <span class="fs-6 fw-bold mt-3">{{ __('لا يسمح بتكرار الأذونات الرجاء الانتباه!!!') }}</span>
        </div>
    </div>
</x-layouts.dashboard>
