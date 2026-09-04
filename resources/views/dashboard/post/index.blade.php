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
                        <a href="{{ route('postsIndex') }}">
                            <span>{{ __('المنشورات') }}</span>
                            <span><i class="fa-solid fa-book"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="{{ route('postCreate') }}" class="btn btn-dark">
                    <span>{{ __('إضافة منشور') }}</span>
                    <span><i class="fa-solid fa-square-plus"></i></span>
                </a>
            </div>
        </div>
    @if(count($posts) > 0)
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">{{ __('#') }}</th>
                            <th scope="col">{{ __('العنوان') }}</th>
                            <th scope="col">{{ __('المحتوى') }}</th>
                            <th scope="col" colspan="2">{{ __('العمليات') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ __($post->id) }}</td>
                                <td scope="row">{{ __($post->title) }}</td>
                                <td scope="row">{{ __($post->content) }}</td>
                                <td>
                                    <a href="{{ route('postEdit',$post->id) }}" class="btn btn-success">
                                        <span><i class="fa-solid fa-pen-to-square fa-lg"></i></span>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('postDestroy', $post) }}" method="post" id="post-delete-form-{{ $post->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger delete-posts-button" data-post-id="{{ $post->id }}">
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
                let deletePostsButton = document.querySelectorAll('.delete-posts-button')
                deletePostsButton.forEach(deletePostButton => {
                    deletePostButton.addEventListener('click',(event) => {
                        event.preventDefault()
                        deleteItem(deletePostButton,'data-post-id','post-delete-form-')
                    })
                })
            </script>
</x-layouts.dashboard>
