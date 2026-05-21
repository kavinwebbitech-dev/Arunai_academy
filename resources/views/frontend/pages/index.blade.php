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

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset('uploads/banners/' . $banner->image) }}" alt="First slide">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <!-- ══ HIGHLIGHTS STRIP ══ -->
    <div class="count" style="background:#eee9e1; padding:2rem 2rem; z-index: 99999;">
        <div class="featured-card-parent"
            style="max-width:1400px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2rem;text-align:center;">
            <div class="featured-card" style="color:#fff;">
                <div style="font-size:1.8rem;margin-bottom:0.3rem;"><i class="fa-solid fa-medal" style="color: #d3a700"></i>
                </div>
                <div style="font-weight:600;font-size:0.95rem; color: #d3a700">District Rank Holders</div>
            </div>
            <div class="featured-card" style="color:#fff;">
                <div style="font-size:1.8rem;margin-bottom:0.3rem;"><i class="fa-solid fa-book" style="color: #d3a700"></i>
                </div>
                <div style="font-weight:600;font-size:0.95rem; color: #d3a700">Comprehensive Study Material</div>
            </div>
            <div class="featured-card" style="color:#fff;">
                <div style="font-size:1.8rem;margin-bottom:0.3rem;"><i class="fa-solid fa-person-chalkboard"
                        style="color: #d3a700"></i></div>
                <div style="font-weight:600;font-size:0.95rem; color: #d3a700">Expert Coaching Staff</div>
            </div>
            <div class="featured-card" style="color:#fff;">
                <div style="font-size:1.8rem;margin-bottom:0.3rem;"><i class="fa-regular fa-lightbulb"
                        style="color: #d3a700"></i></div>
                <div style="font-weight:600;font-size:0.95rem; color: #d3a700">Smart Learning Methods</div>
            </div>
            <div class="featured-card" style="color:#fff;">
                <div style="font-size:1.8rem;margin-bottom:0.3rem;"><i class="fa-solid fa-bullseye"
                        style="color: #d3a700"></i></div>
                <div style="font-weight:600;font-size:0.95rem; color: #d3a700">Result-Oriented Approach</div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-img-wrap reveal">
                    <div class="about-img-main bg-g1">
                        <img src="assets/images/academy.jpg" />
                    </div>
                    <div class="about-badge-float">
                        <div class="big-num">15+</div>
                        <span>Years of Excellence</span>
                    </div>
                </div>
                <div class="about-text reveal">
                    <div class="section-tag">Our Story</div>
                    <h2 class="section-title">Building Dreams,<br /><span class="accent">One Student at a Time</span></h2>
                    <p>Arunai Academy is a leading Botany coaching institute established in 2012, dedicated exclusively to preparing aspirants for PGTRB and UGTRB Botany examinations.</p>
                    <p>With more than a decade of excellence, we have guided hundreds of students toward successful careers as government teachers across Tamil Nadu. Our academy is known for expert teaching, concept-based learning, structured preparation, and consistent state-level results.</p>
                    <ul class="values-list">
                        <li>
                            <div class="check-icon">✓</div> Expert faculty with 10+ years average experience
                        </li>
                        <li>
                            <div class="check-icon">✓</div> Small batch sizes for personalised attention
                        </li>
                        <li>
                            <div class="check-icon">✓</div> State-of-the-art learning infrastructure
                        </li>
                        <li>
                            <div class="check-icon">✓</div> Regular mock tests and performance tracking
                        </li>
                        <li>
                            <div class="check-icon">✓</div> Parent-teacher collaboration for student success
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-primary" style="margin-top:1rem;display:inline-flex;">Get in Touch
                        →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ══ ACHIEVERS SECTION ══ -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Our Pride</div>
                <h2 class="section-title">Star <span class="accent">Achievers</span></h2>
                <h5>PGTRB 2025 achievers</h5>
                <p class="section-subtitle">Celebrating the brilliance of our outstanding students who set benchmarks of
                    excellence.</p>
            </div>
            <div class="achievers-grid">
                <!-- Card 1 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 1</div>
                        </div>
                        <img src="assets/images/2025/nithya-kalyani.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Nithya Kalyani L </h3>
                        <div class="achiever-score">MARK : 103 </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 2</div>
                        </div>
                        <img src="assets/images/2025/ramesh.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Ramesh C </h3>
                        <div class="achiever-score">MARK : 100 </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 2</div>
                        </div>
                        <img src="assets/images/2025/sreejakumari-2.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Sreejakumari S </h3>
                        <div class="achiever-score">MARK : 100 </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 3</div>
                        </div>
                        <img src="assets/images/2025/ramya.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Ramya M </h3>
                        <div class="achiever-score">MARK : 99 </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 4</div>
                        </div>
                        <img src="assets/images/2025/vijayaraj.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Vijayaraj D </h3>
                        <div class="achiever-score">MARK : 99 </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 3</div>
                        </div>
                        <img src="assets/images/2025/shanumagapriya.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Shanmugapriya T </h3>
                        <div class="achiever-score">MARK : 98 </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 2</div>
                        </div>
                        <img src="assets/images/2025/abinaya.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Abinaya V </h3>
                        <div class="achiever-score">MARK : 98 </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="achiever-card reveal">
                    <div class="achiever-img-placeholder bg-g1">
                        <div class="profile-rank">
                            <div class="achiever-rank">State Rank 5</div>
                        </div>
                        <img src="assets/images/2025/gayathri.webp" />
                    </div>
                    <div class="achiever-card-body">
                        <h3>Gayathri S </h3>
                        <div class="achiever-score">MARK : 96 </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-top:2.5rem;">
                <a href="{{ route('achievers_page') }}" class="btn-primary">View All Achievers →</a>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Videos</div>
                <h2 class="section-title">Watch Our <span class="accent">Stories</span></h2>
                <p class="section-subtitle">From student success stories to campus events – relive the best moments of
                    Arunai Academy.</p>
            </div>
            <div class="video-grid">
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
            </div>
            <div style="text-align:center; margin-top:1.5rem;">
                <a href="{{ route('gallery.video') }}" class="btn-primary">View All →</a>
            </div>
        </div>
    </div>

    <div class="campus-life py-60 d-none">
        <div class="container">
            <div class="section-header" style="margin-bottom:2rem;">
                <div class="section-tag">Campus Life</div>
                <h2 class="section-title">Life at <span class="accent">Arunai Academy</span></h2>
            </div>
            <div class="slider-wrapper">
                <button class="slider-btn slider-btn--prev" onclick="slideRow(-1)" aria-label="Previous">
                    &#8249;
                </button>
                <div class="row-images" id="campusSlider">
                    <div class="row-img-item">
                        <div class="arunai-spl">
                            <div class="img-placeholder bg-g1">Expert Faculty</div>
                        </div>
                    </div>
                    <div class="row-img-item">
                        <div class="arunai-spl">
                            <div class="img-placeholder bg-g2">Study Materials</div>
                        </div>
                    </div>
                    <div class="row-img-item">
                        <div class="arunai-spl">
                            <div class="img-placeholder bg-g3">Mock Tests</div>
                        </div>
                    </div>
                    <div class="row-img-item">
                        <div class="arunai-spl">
                            <div class="img-placeholder bg-g4">Doubt Clearing</div>
                        </div>
                    </div>
                    <div class="row-img-item">
                        <div class="arunai-spl">
                            <div class="img-placeholder bg-g6">Motivation Sessions</div>
                        </div>
                    </div>
                    <div class="row-img-item">
                        <div class="arunai-spl">
                            <div class="img-placeholder bg-g7">Results & Achievements</div>
                        </div>
                    </div>
                </div>

                <button class="slider-btn slider-btn--next" onclick="slideRow(1)" aria-label="Next">
                    &#8250;
                </button>
            </div>
        </div>
    </div>


    <!-- ══ WHY CHOOSE US ══ -->
    <section class="why-arunai py-60">
        <div class="container">
            <div class="why-title">
                <h2 class="section-title">Why Choose <span class="accent">Arunai Academy?</span></h2>
                <p>We don’t follow ordinary coaching — we create rank holders.</p>
            </div>
            <div class="why-cards">
                <div class="why-box">Exclusive focus on Botany only</div>
                <div class="why-box">Deep concept-based teaching</div>
                <div class="why-box">Highly experienced expert faculty</div>
                <div class="why-box">Exam-oriented study materials</div>
                <div class="why-box">Regular test series & performance analysis</div>
                <div class="why-box">Previous year question trend analysis</div>
                <div class="why-box">Structured revision programs</div>
                <div class="why-box">Proven consistent success rate</div>
            </div>
        </div>
    </section>

    <section id="study" class="study-material">
        <div class="container">
            <div class="why-title">
                <h2 class="section-title">Study Materials</h2>
            </div>
            <div class="card-grid">
                @foreach ($materials as $item)
                    <div class="pdf-card">
                        <img src="{{ asset('assets/images/pdf.png') }}" alt="PDF Thumbnail">
                        <h3>{{ $item->title }}</h3>
                        <a href="{{ asset('/uploads/materials/' . $item->pdf_file) }}" target="_blank" class="btn">View PDF</a>
                    </div>
                @endforeach
            </div>
            <div style="text-align:center;margin-top:2.5rem;">
                <a href="{{ route('study-material') }}" class="btn-primary">View All→</a>
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
            <div class="image-gallery" id="galleryContainer">
                @foreach ($gallery as $item)
                    <div class="gallery-item" data-cat="{{ $item->title }}">
                        <div class="gallery-placeholder">
                            <img src="{{ asset('uploads/gallery/' . $item->image) }}" />
                        </div>
                        <div class="gallery-overlay"><i class="fa-solid fa-magnifying-glass open-lightbox"></i></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="lightbox" class="lightbox">
        <span class="close-btn">&times;</span>
        <span class="prev-btn">&#10094;</span>
        <img class="lightbox-img" src="">
        <span class="next-btn">&#10095;</span>
    </div>

    <div class="offer py-60">
        <div class="container">
            <div class="admission-banner">
                <div class="banner-bg-icons">
                    <span class="bg-icon" style="top:10%;left:45%">📚</span>
                    <span class="bg-icon" style="top:60%;left:42%">📖</span>
                    <span class="bg-icon" style="top:15%;left:55%">🎓</span>
                    <span class="bg-icon" style="top:65%;left:52%">✏️</span>
                    <span class="bg-icon" style="top:30%;left:60%">📝</span>
                </div>
                <div class="banner-light-arc"></div>
                <div class="banner-content">
                    <span class="banner-script">Academy</span>
                    <div class="banner-admission">ADMISSION <span class="banner-globe">🌍</span></div>
                    <div class="banner-open">OPEN FOR 2026</div>
                    <a href="{{ route('contact') }}" class="banner-btn">ENROL NOW</a>
                </div>

                <div class="banner-student">
                    {{-- Replace with your actual <img> tag --}}
                    <img src="{{ asset('assets/images/offer.png') }}" alt="Student" />
                </div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=919500244679&text=Hello%20Arunai%20Academy" class="whatsapp-float"
        target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
    </a>

    <a href="tel:9500244679" class="call-float" rel="noopener" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
            <path
                d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
        </svg>
    </a>

    <a href="https://www.youtube.com/@arunaiacademy9219" target="_blank" class="youtube-float" rel="noopener"
        aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
            <path
                d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z" />
        </svg>
    </a>

    <script>
        $(document).ready(function () {

            var $carousel = $('#carouselExampleIndicators');

            $carousel.carousel({
                interval: 6000,
                pause: false,
                wrap: true
            });

            // Next button
            $('.carousel-control-next').click(function (e) {
                e.preventDefault();
                $carousel.carousel('next');
            });

            // Prev button
            $('.carousel-control-prev').click(function (e) {
                e.preventDefault();
                $carousel.carousel('prev');
            });

        });
    </script>
    <script>
        document.querySelectorAll('.year-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.year-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        document.addEventListener("DOMContentLoaded", function () {

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

            document.body.addEventListener("click", function (e) {
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
