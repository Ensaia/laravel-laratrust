<x-layouts.app>
    <div class="row mt-3">
        <div class="col-md-12">
            @if(session('error'))
                <div class="alert alert-warning alert-dismissible fade show de-flex" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex justify-content-between">
                        <div class="fs-6 fw-semibold">{{ session('error') }}</div>
                        <div><i class="fa-solid fa-exclamation-triangle fa-lg"></i></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6">
            <div class="swiper imageSwiper">
                <div class="swiper-wrapper">
                    @foreach($images as $image)
                        <div class="swiper-slide">
                            <img
                                    src="{{ asset('carousel/'.basename($image)) }}"
                                    alt="{{ asset('carousel/'.basename($image)) }}"
                                    class="img-fluid" width="650" height="450">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- prayer times -->
            <div class="card mt-2 g-3">
                <div class="card-body">
                    <div class="card-title">
                        <span class="fw-semibold">{{ __(' مواقيت الصلاة لمدينة '.$city_name) }}</span>
                    </div>
                    <table class="table table-borderless">
                        <thead class="text-center">
                        <tr>
                            <th>{{ __('الفجر') }}</th>
                            <th>{{ __('الشروق') }}</th>
                            <th>{{ __('الظهر') }}</th>
                            <th>{{ __('العصر') }}</th>
                            <th>{{ __('المغرب') }}</th>
                            <th>{{ __('العشاء') }}</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($prayer_times as $prayer_time)
                            <tr>
                                <td> {{ $prayer_time->fajr }}</td>
                                <td> {{ $prayer_time->shoruq }}</td>
                                <td> {{ $prayer_time->dohr }}</td>
                                <td> {{ $prayer_time->asr }}</td>
                                <td> {{ $prayer_time->maghrib }}</td>
                                <td> {{ $prayer_time->isha }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- latest posts -->
            <div class="mt-3">
                <span class="fw-semibold">{{ __('جديد المنشورات') }}</span>
            </div>
            @foreach($posts as $post)
                <div class="card mt-2 g-3">
                    <div class="card-body">
                        {{ $post->title }}
                    </div>
                </div>
            @endforeach
            <!-- ply youtube -->
            <div class="mt-3">
                <div id="plyr-youtube-player" data-plyr-provider="youtube" data-plyr-embed-id="h6SB5DRN-CM"></div>
            </div>
        </div>
    </div>
    <script> 
    document.addEventListener("DOMContentLoaded", (event) => {
  const plyrYoutubePlayer = Plyr.setup('#plyr-youtube-player')
  plyrYoutubePlayer.play();
});
</script>
</x-layouts.app>
