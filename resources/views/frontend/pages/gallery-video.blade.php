@extends('frontend.layouts.app')
@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Video Gallery</h1>
            <p>Inspiring stories, events and learning content from our campus</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span>
                <span>Gallery</span><span class="breadcrumb-sep">›</span>
                <span>Video Gallery</span>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Videos</div>
                <h2 class="section-title">Watch Our <span class="accent">Stories</span></h2>
                <p class="section-subtitle">From student success stories to campus events – relive the best moments of
                    Arunai Academy.</p>
            </div>
            <div class="video-grid">
                {{-- @foreach ($videos as $video)
                @if($video->embed_url)
                <div class="col-4">
                    <iframe width="100%" height="260" src="{{ $video->embed_url }}" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                @endif
                @endforeach --}}


                @foreach ($videos as $video)
                    @if($video->embed_url)
                        <div class="video-card reveal">
                            <div class="video-thumb">
                                <iframe width="100%" height="280" src="{{ $video->embed_url }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif
                @endforeach

           {{-- <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div> --}}

                {{-- <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/uIq-2oRRt1w?si=pxSb0oPClqOuDpYw" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="video-card reveal">
                    <div class="video-thumb">
                        <iframe width="100%" height="280"
                            src="https://www.youtube.com/embed/ODLPw_5NUOs?si=RWoO2Sbm2kJyVp3-" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    <script>
document.addEventListener("DOMContentLoaded", function () {
    const iframes = document.querySelectorAll("iframe[data-src]");

    const loadIframe = (iframe) => {
        iframe.setAttribute("src", iframe.getAttribute("data-src"));
        iframe.removeAttribute("data-src");
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                loadIframe(entry.target);
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    iframes.forEach(iframe => observer.observe(iframe));
});
</script>

@endsection
