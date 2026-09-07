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
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-center">
                    <tr>
                        <th>#</th>
                        <th>{{ __('اسم المستخدم') }}</th>
                        <th>{{ __('البريد الإلكتروني') }}</th>
                        <th>{{ __('حالة الحساب') }}</th>
                        <th colspan="2">{{ __('اﻷدوار') }}</th>
                        <th>{{ __('اﻷدوار الحالية') }}</th>
                        <th>{{ __('الصلاحيات الحالية') }}</th>
                        <th colspan="2">{{ __('الصلاحيات') }}</th>
                        <th colspan="2">{{ __('العمليات') }}</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->email_verified_at != '')
                                    <span class="badge bg-success fs-7">
                                        {{ __('الحساب مفعل') }}
                                    </span>
                                @else
                                    <span class="badge bg-warning fs-7">
                                        {{ __('الحساب غير مفعل') }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('userRolesIndex',$user) }}" class="btn btn-dark">
                                    <span><i class="fa-solid fa-eye"></i></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('userRoleCreate',$user) }}" class="btn btn-dark">
                                    <span><i class="fa-solid fa-square-plus"></i></span>
                                </a>
                            </td>
                            <td>
                                @if(count($user->UserRoles()) > 0)
                                    @foreach($user->UserRoles() as $role)
                                        <span class="badge bg-dark fs-7">{{ $role->name }}</span>
                                    @endforeach
                                @else
                                    <span class="badge bg-dark fs-7">{{ __('لا توجد أدوار') }}</span>
                                @endif
                            </td>
                            <td>
                                @if(count($user->UserPermissions()) > 0)
                                    @foreach($user->UserPermissions() as $permission)
                                        <span class="badge bg-dark fs-7">{{ $permission->name }}</span>
                                    @endforeach
                                @else
                                    <span class="badge bg-dark fs-7">{{ __('لا توجد صلاحيات') }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('userPermissionsIndex',$user) }}" class="btn btn-dark">
                                    <span><i class="fa-solid fa-eye"></i></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('userPermissionCreate',$user) }}" class="btn btn-dark">
                                    <span><i class="fa-solid fa-square-plus"></i></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('userEdit',$user) }}" class="btn btn-success">
                                    <span><i class="fa-solid fa-pen-to-square"></i></span>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('userDestroy', $user) }}" method="post"
                                      id="user-delete-form-{{ $user->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger delete-users-button"
                                            data-user-id="{{ $user->id }}">
                                        <span><i class="fa-solid fa-trash-alt"></i></span>
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
    <div class="row">
        <div class="col-md-12">
            <div classs="d-flex justify-content-left">
                {{ $users->links('pagination::paginator') }}
            </div>
        </div>
    </div>
    <script>
        let deleteUserUsersButton = document.querySelectorAll('.delete-users-button')
        deleteUserUsersButton.forEach(deleteUserButton => {
            deleteUserButton.addEventListener('click', (event) => {
                event.preventDefault()
                deleteItem(deleteUserButton, 'data-user-id', 'user-delete-form-')
            })
        })
    </script>
</x-layouts.dashboard>
