<x-layouts.dashboard>
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
                        <a href="{{ route('actionLogIndex') }}">
                            <span>{{ __('سجل العمليات') }}</span>
                            <span><i class="fa-solid fa-address-book"></i></span>
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
                        <th>{{ __('نوع العملية') }}</th>
                        <th>{{ __('(النموذج) Model') }}</th>
                        <th>{{ __('تاريخ العملية') }}</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($actions as $action)
                        <tr>
                            <td>{{ $action->id }}</td>
                            <td>{{  \App\Helpers\Helper::getUsername($action->user_id) }}</td>
                            <td>{{  \App\Helpers\Helper::getUserEmail($action->user_id) }}</td>
                            <td>{{ $action->action }}</td>
                            <td>{{ $action->action_model }}</td>
                            <td>{{ $action->created_at->diffForHumans() }}</td>
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
                {{ $actions->links('pagination::paginator') }}
            </div>
        </div>
    </div>
</x-layouts.dashboard>
