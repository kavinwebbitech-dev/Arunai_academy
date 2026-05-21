<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">

    <link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="16x16">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/main.css') }}">

    <script src="{{ asset('landing/assets/js/plugins/jquery-3-7-1.min.js') }}"></script>

    <link rel="canonical" href="{{ request()->url() }}">


    @stack('styles')


</head>

<body>

    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('assets/images/logo.png') }}" alt=""></div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    @include('frontend.landing-pages.layouts.header')


    @yield('content')


    @include('frontend.landing-pages.layouts.footer')

    <script>
        document.querySelectorAll('.category-menu li').forEach(function(item) {
            item.addEventListener('click', function() {

                // remove active from all
                document.querySelectorAll('.category-menu li').forEach(function(li) {
                    li.classList.remove('active');

                    // remove arrow if exists
                    let arrow = li.querySelector('.arrow');
                    if (arrow) arrow.remove();
                });

                // add active to clicked
                this.classList.add('active');

                // add arrow
                this.insertAdjacentHTML('afterbegin',
                    '<span class="arrow"><i class="fa-solid fa-chevron-right"></i></span> ');
            });
        });
    </script>

    <script src="{{ asset('landing/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/counter.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/Splitetext.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/SmoothScroll.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>
</body>

</html>
