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
                        <a href="{{ route('rolesIndex') }}">
                            <span>{{ __('الأدوار') }}</span>
                            <span><i class="fa-solid fa-user-gear"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('roleCreate') }}" class="btn btn-dark">
                    <span>{{ __('إضافة دور') }}</span>
                    <span><i class="fa-solid fa-square-plus"></i></span>
                </a>
            </div>
        </div>
        @if(count($roles) > 0)
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">{{ __('#') }}</th>
                            <th scope="col">{{ __('الاسم') }}</th>
                            <th scope="col">{{ __('اسم العرض') }}</th>
                            <th scope="col">{{ __('الوصف') }}</th>
                            <th scope="col">{{ __('الصلاحيات') }}</th>
                            <th scope="col" colspan="2">{{ __('عمليات الصلاحيات') }}</th>
                            <th scope="col" colspan="2">{{ __('العمليات') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($roles as $role)
                            <tr>
                                <td scope="row">{{ __($role->id) }}</td>
                                <td scope="row">{{ __($role->name) }}</td>
                                <td scope="row">{{ __($role->display_name) }}</td>
                                <td scope="row">{{ __($role->description) }}</td>
                                <td>
                                    @if(count($role->permissions) > 0)
                                        @foreach($role->permissions as $permission)
                                            <span class="badge bg-dark fs-6">
                                        {{ $permission->name }}
                                    </span>
                                        @endforeach
                                    @else
                                        <span class="badge bg-dark fs-6">{{ __('لا توجد صلاحيات') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('rolePermissionsIndex',$role->id) }}" class="btn btn-info">
                                        <span><i class="fa-solid fa-eye fa-lg"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('rolePermissionCreate',$role->id) }}" class="btn btn-dark">
                                        <span><i class="fa-solid fa-square-plus fa-lg"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('roleEdit',$role->id) }}" class="btn btn-success">
                                        <span><i class="fa-solid fa-pen-to-square fa-lg"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('roleDestroy', $role) }}" method="post"
                                          id="role-delete-form-{{ $role->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger delete-roles-button"
                                                data-role-id="{{ $role->id }}">
                                            <span><i class="fa-solid fa-trash-alt fa-lg"></i></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
            <x-ui.no-data></x-ui.no-data>
            @endif
    <script>
        let deleteRolesButton = document.querySelectorAll('.delete-roles-button')
        deleteRolesButton.forEach(deleteRoleButton => {
            deleteRoleButton.addEventListener('click', (event) => {
                event.preventDefault()
                deleteItem(deleteRoleButton,'data-role-id','role-delete-form-')
            })
        })
    </script>
</x-layouts.dashboard>
