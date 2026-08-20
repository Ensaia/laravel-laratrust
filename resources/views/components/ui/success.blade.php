<div class="row mt-3">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show de-flex" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="d-flex justify-content-between">
                    <div class="fs-6 fw-semibold">{{ session('success') }}</div>
                    <div><i class="fa-solid fa-circle-check fa-lg"></i></div>
                </div>
            </div>
        @endif
    </div>
</div>
