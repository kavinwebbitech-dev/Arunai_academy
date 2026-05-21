@extends('frontend.layouts.app')
@section('content')
    <style>
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            text-align: center;
        }

        .lightbox-img {
            max-width: 80%;
            max-height: 80%;
            margin-top: 40px;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 40px;
            color: #fff;
            cursor: pointer;
        }

        .prev-btn,
        .next-btn {
            position: absolute;
            top: 50%;
            font-size: 35px;
            color: #fff;
            cursor: pointer;
            user-select: none;
        }

        .prev-btn {
            left: 40px;
        }

        .next-btn {
            right: 40px;
        }
    </style>

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Image Gallery</h1>
            <p>Glimpses of life and milestones at Arunai Academy</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span>
                <span>Gallery</span><span class="breadcrumb-sep">›</span>
                <span>Image Gallery</span>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Gallery</div>
                <h2 class="section-title">Our <span class="accent">Moments</span></h2>
                <p class="section-subtitle">Explore memorable moments from events, celebrations and everyday campus life.
                </p>
            </div>

            <!-- Filter -->
            {{-- <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">All Photos</button>
                <button class="filter-btn" data-filter="2019">2019</button>
                <button class="filter-btn" data-filter="2022">2022</button>
                <button class="filter-btn" data-filter="2024">2024</button>
                <button class="filter-btn" data-filter="2025">2025</button>
                <button class="filter-btn" data-filter="2026">2026</button>
            </div> --}}

            <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">All Photos</button>
                 @foreach ($allYears as $year)
                    <button class="filter-btn "
                            data-filter="{{ $year }}">
                        {{ $year }}
                    </button>
                @endforeach
            </div>

            <div class="image-gallery" id="galleryContainer">
                {{-- @foreach ($galleries as $item)
                    <div class="gallery-item" data-cat="{{ $item->title }}">
                        <div class="gallery-placeholder">
                            <img src="{{ asset('uploads/gallery/' . $item->image) }}" />
                        </div>
                        <div class="gallery-overlay">🔍</div>
                    </div>
                @endforeach --}}

                {{-- <div class="gallery-item" data-cat="2019" data-lb="1">
                    <div class="gallery-placeholder bg-g1">
                        <img src="assets/images/student-3.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2022" data-lb="2">
                    <div class="gallery-placeholder bg-g2">
                        <img src="assets/images/student-5.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2024" data-lb="3">
                    <div class="gallery-placeholder bg-g3">
                        <img src="assets/images/student-3.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2025" data-lb="4">
                    <div class="gallery-placeholder bg-g4">
                        <img src="assets/images/student-4.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2019" data-lb="6">
                    <div class="gallery-placeholder bg-g6">
                        <img src="assets/images/student-5.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2022" data-lb="7">
                    <div class="gallery-placeholder bg-g7">
                        <img src="assets/images/student-3.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2024" data-lb="8">
                    <div class="gallery-placeholder bg-g8">
                        <img src="assets/images/student-4.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2025" data-lb="9">
                    <div class="gallery-placeholder bg-g1">
                        <img src="assets/images/student-5.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2019" data-lb="11">
                    <div class="gallery-placeholder bg-g3">
                        <img src="assets/images/student-3.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2024" data-lb="12">
                    <div class="gallery-placeholder bg-g4">
                        <img src="assets/images/student-4.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2022" data-lb="13">
                    <div class="gallery-placeholder bg-g5">
                        <img src="assets/images/student-3.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2025" data-lb="14">
                    <div class="gallery-placeholder bg-g6">
                        <img src="assets/images/student-5.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2019" data-lb="16">
                    <div class="gallery-placeholder bg-g8">
                        <img src="assets/images/student-3.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2024" data-lb="17">
                    <div class="gallery-placeholder bg-g1">
                        <img src="assets/images/student-4.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div>
                <div class="gallery-item" data-cat="2022" data-lb="18">
                    <div class="gallery-placeholder bg-g3">
                        <img src="assets/images/student-5.jpg" />
                    </div>
                    <div class="gallery-overlay">🔍</div>
                </div> --}}

            </div>
        </div>
    </div>

    <div id="lightbox" class="lightbox">
        <span class="close-btn">&times;</span>
        <span class="prev-btn">&#10094;</span>
        <img class="lightbox-img" src="">
        <span class="next-btn">&#10095;</span>
    </div>

    {{-- <div class="lightbox" id="lightbox">
        <button class="lightbox-close">✕</button>
        <div class="lightbox-content">
            <div id="lb-content" style="font-size:6rem;padding:2rem;"></div>
            <p style="color:rgba(255,255,255,0.6);margin-top:1rem;font-size:0.9rem;">Arunai Academy – Always Success</p>
        </div>
    </div> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let galleryData = [];

        $(document).ready(function() {

            // Load gallery once
            $.ajax({
                url: "{{ route('gallery.data') }}",
                type: "GET",
                success: function(data) {
                    galleryData = data;
                    renderGallery('all');
                }
            });

            // Filter buttons
            $(document).on('click', '.filter-btn', function() {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');

                let year = $(this).data('filter');
                renderGallery(year);
            });

            function renderGallery(filter) {
                let html = '';

                galleryData.forEach(function(item) {

                    if (filter === 'all' || item.title == filter) {
                        html += `
                    <div class="gallery-item" data-cat="${item.title}">
                        <div class="gallery-placeholder">
                             <img src="{{ asset('uploads/gallery/${item.image}') }}" />
                        </div>
                        <div class="gallery-overlay"><i class="fa-solid fa-magnifying-glass open-lightbox"></i></div>
                    </div>
                `;
                    }

                });

                $('#galleryContainer').html(html);
            }

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const lightbox = document.getElementById("lightbox");
            const lightboxImg = document.querySelector(".lightbox-img");
            const closeBtn = document.querySelector(".close-btn");
            const nextBtn = document.querySelector(".next-btn");
            const prevBtn = document.querySelector(".prev-btn");

            let images = [];
            let currentIndex = 0;

            function updateImages() {
                images = Array.from(document.querySelectorAll(".gallery-item img"));
            }

            updateImages();

            document.body.addEventListener("click", function(e) {
                if (e.target.classList.contains("open-lightbox")) {
                    updateImages();
                    const img = e.target.closest(".gallery-item").querySelector("img");
                    currentIndex = images.indexOf(img);
                    openLightbox(images[currentIndex].src);
                }
            });

            function openLightbox(src) {
                lightbox.style.display = "block";
                lightboxImg.src = src;
            }

            function showNext() {
                currentIndex = (currentIndex + 1) % images.length;
                lightboxImg.src = images[currentIndex].src;
            }

            function showPrev() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                lightboxImg.src = images[currentIndex].src;
            }

            nextBtn.addEventListener("click", showNext);
            prevBtn.addEventListener("click", showPrev);

            closeBtn.addEventListener("click", () => {
                lightbox.style.display = "none";
            });

        });
    </script>
@endsection
