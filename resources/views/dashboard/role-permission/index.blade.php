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
                        <a href="{{ route('rolesIndex') }}">
                            <span>{{ __('الأدوار') }}</span>
                            <span><i class="fa-solid fa-user-gear"></i></span>
                        </a>
                    </li>
                     <li class="breadcrumb-item">
                        <a href="{{ route('rolePermissionsIndex',request()->role->id) }}">
                            <span>{{ __('صلاحيات الدور') }}</span>
                            <span><i class="fa-solid fa-user-lock"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('rolePermissionCreate', $role[0]->id) }}" class="btn btn-dark">
                    <span class="p-2">{{ __('إضافة صلاحيات') }}</span>
                    <span><i class="fa-solid fa-square-plus"></i></span>
                </a>
            </div>
        </div>
        @if (count($role[0]->permissions) > 0)
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('اسم الدور') }}</th>
                                <th>{{ __('الصلاحيات') }}</th>
                                <th colspan="2">{{ __('العمليات') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php $index = 1 @endphp
                            @foreach($role[0]->permissions as $permission)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $role[0]->name }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <form action="{{ route('rolePermissionDestroy',['role' => $role[0],'permission' => $permission]) }}" method="post" id="role-permission-delete-form-{{ $permission->id }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger delete-role-permission-buttons" data-permission-id="{{ $permission->id }}">
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
         @else
            <x-ui.no-data></x-ui.no-data>
        @endif
    <script>
        let deleteRolePermissionButtons = document.querySelectorAll('.delete-role-permission-buttons')
        deleteRolePermissionButtons.forEach(deleteRolePermissionButton => {
            deleteRolePermissionButton.addEventListener('click',(event) => {
                event.preventDefault()
                deleteItem(deleteRolePermissionButton,'data-permission-id','role-permission-delete-form-')
            })
        })
    </script>
</x-layouts.dashboard>
