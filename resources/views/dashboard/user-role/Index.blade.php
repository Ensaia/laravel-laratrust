<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
        <div class="row mt-3">
            <div class="col-md-12">
                <a  href="{{ route('userRoleCreate',request()->user) }}" class="btn btn-dark">
                    <span class="p-2">{{ __('إضافة دور') }}</span>
                    <span><i class="fa-solid fa-plus-square"></i></span>
                </a>
            </div>
        </div>
        @if(count($user_roles[0]->roles) > 0)
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('اسم المستخدم') }}</th>
                            <th>{{ __('اﻷدوار') }}</th>
                            <th>{{ __('العمليات') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($user_roles as $user)
                            @foreach($user->roles as $role)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <span class="badge bg-dark fs-7">{{ $role->name }}</span>
                                    </td>
                                    <td>                                                   <!--- OR $user_roles[0] --->
                                        <form action="{{ route('userRoleDestroy',['user' => request()->user , 'role' => $role]) }}" method="post" id="user-role-delete-form-{{ $role->id }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger delete-user-roles-button" data-role-id="{{ $role->id }}">
                                                <span><i class="fa-solid fa-trash-alt fa-lg"></i></span>
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
        let deleteUserRolesButton = document.querySelectorAll('.delete-user-roles-button')
        deleteUserRolesButton.forEach(deleteUserRoleButton => {
            deleteUserRoleButton.addEventListener('click', (event) => {
                event.preventDefault()
                deleteItem(deleteUserRoleButton,'data-role-id','user-role-delete-form-')
            })
        })
    </script>
</x-layouts.dashboard>

