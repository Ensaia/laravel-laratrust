<x-layouts.dashboard>
    <x-ui.success></x-ui.success>
<div class="row mt-3">
  <div class="col-md-12">
        <div class="card">
            <form class="form" action="{{ route('postUpdate', $post) }}" method="post">
                @method('put')
                @csrf
                <div class="card-body row g-3">
                    <div class="">
                        <label for="name" class="form-label">{{ __('العنوان') }}</label>
                        <input type="text" name="title" id="title" class="form-control @error ('title') is-invalid @enderror" placeholder="{{ __('العنوان') }}"
                            value="{{ $post->title }}" />
                        @error('title')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="">
                        <label for="content" class="form-label">{{ __('المحتوى') }}</label>
                        <textarea name="content" id="content" rows="3" class="form-control  @error ('content') is-invalid @enderror" placeholder="{{ __('المحتوى') }}">{{ $post->content }}</textarea>
                        @error('content')
                            <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="">
                       @include('components.ui.edit-button')
                    </div>
                </div>
            </form>
        </div>
  </div>
</div>
</x-layouts.dashboard>
