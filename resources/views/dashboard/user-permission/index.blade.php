<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('userPermissionCreate',request()->user) }}" class="btn btn-dark">
                    <span class="p-2">{{ __('إضافة إذن') }}</span>
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
                            <th>{{ __('الأذونات') }}</th>
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

