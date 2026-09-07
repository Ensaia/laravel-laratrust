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
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('userPermissionCreate',request()->user) }}" class="btn btn-dark">
                    <span class="p-2">{{ __('إضافة صلاحيات') }}</span>
                    <span><i class="fa-solid fa-plus-square"></i></span>
                </a>
            </div>
        </div>
    @if(count($user_permissions[0]->permissions) > 0)
        <div class=" row mt-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('اسم المستخدم') }}</th>
                            <th>{{ __('الصلاحيات') }}</th>
                            <th>{{ __('العمليات') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($user_permissions as $user)
                            @foreach($user->permissions as $permission)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <span  class="badge bg-dark fs-7">{{ $permission->name }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('userPermissionDestroy',['user' => request()->user , 'permission' => $permission]) }}" method="post" id="user-permission-delete-form-{{ $permission->id }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger delete-user-permissions-button" data-permission-id="{{ $permission->id }}">
                                                <span><i class="fa-solid fa-trash-alt"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
        let deleteUserRolesButton = document.querySelectorAll('.delete-user-permissions-button')
        deleteUserRolesButton.forEach(deleteUserRoleButton => {
            deleteUserRoleButton.addEventListener('click', (event) => {
                event.preventDefault()
                deleteItem(deleteUserRoleButton,'data-permission-id','user-permission-delete-form-')
            })
        })
    </script>
</x-layouts.dashboard>

