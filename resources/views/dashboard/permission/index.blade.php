<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('permissionCreate') }}" class="btn btn-dark">
                    <span>{{ __('إضافة صلاحيات') }}</span>
                    <span><i class="fa-solid fa-square-plus"></i></span>
                </a>
            </div>
        </div>
    @if(count($permissions) > 0)
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
                            <th scope="col" colspan="2">{{ __('العمليات') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($permissions as $permission)
                            <tr>
                                <td scope="row">{{ __($permission->id) }}</td>
                                <td scope="row">{{ __($permission->name) }}</td>
                                <td scope="row">{{ __($permission->display_name) }}</td>
                                <td scope="row">{{ __($permission->description) }}</td>
                                <td>
                                    <a href="{{ route('permissionEdit',$permission->id) }}" class="btn btn-success">
                                        <span><i class="fa-solid fa-pen-to-square fa-lg"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('permissionDestroy', $permission) }}" method="post" id="permission-delete-form-{{ $permission->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger delete-permissions-button" data-permission-id="{{ $permission->id }}">
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
                let deletePermissionsButton = document.querySelectorAll('.delete-permissions-button')
                deletePermissionsButton.forEach(deletePermissionButton => {
                    deletePermissionButton.addEventListener('click',(event) => {
                        event.preventDefault()
                        deleteItem(deletePermissionButton,'data-permission-id','permission-delete-form-')
                    })
                })
            </script>
</x-layouts.dashboard>
