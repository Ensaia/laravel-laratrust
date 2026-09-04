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
                        <a href="{{ route('loginLogIndex') }}">
                            <span>{{ __('سجل الدخول') }}</span>
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
                        <th>{{ __('ip address') }}</th>
                        <th>{{ __('المتصفح') }}</th>
                        <th>{{ __('نظام التشغيل') }}</th>
                        <th>{{ __('تاريخ الدخول') }}</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{  $log->name }}</td>
                            <td>{{  $log->email }}</td>
                            <td>{{ $log->ip_address }}</td>
                            <td>{{ $log->browser }}</td>
                            <td>{{ $log->platform }}</td>
                            <td>{{ $log->created_at->diffForHumans() }}</td>
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
                {{ $logs->links('pagination::paginator') }}
            </div>
        </div>
    </div>
</x-layouts.dashboard>
