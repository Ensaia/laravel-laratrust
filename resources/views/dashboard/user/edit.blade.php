<x-layouts.dashboard>
    <x-ui.errors></x-ui.errors>
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
                        <a href="{{ route('userEdit',request()->user->id) }}">
                            <span>{{ __('تحديث بيانات مستخدم') }}</span>
                            <span><i class="fa-solid fa-pen-to-square"></i></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="{{ route('userUpdate',request()->user) }}" method="post">
              @method('put')
                @csrf
                <div class="card">
                    <div class="card-body row g-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">{{ __('اسم المستخدم') }}</label>
                            <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" placeholder="{{ __('اسم المستخدم') }}"
                                value="{{ $user->name }}" />
                            @error('name')
                                <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
                            <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="{{ __('البريد الإلكتروني') }}"
                                value="{{ $user->email }}" />
                            @error('email')
                                <div class="invalid-feedback form-text fw-semibold fs-6">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <x-ui.edit-button></x-ui.edit-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
