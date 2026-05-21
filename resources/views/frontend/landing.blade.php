<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arunai Academy Always Success</title>
    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
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

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('landing/assets/js/plugins/jquery-3-7-1.min.js') }}"></script>

</head>
 <style>
        .enquiry-form .subject {
            height: 40px;
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 0px 14px;
            font-size: 14px;
            transition: 0.3s;
        }

        .category-menu li:not(.active) a {
            color: #000000 !important;
            /* background: #e5e5e5; */
        }

        .category-menu li.active a {
            color: #fff !important;
        }

        .category-menu li:hover {
            background: #046980;
            color: #fff !important;
        }

        /* ICON */
        .category-menu li:hover .fa-solid.fa-chevron-right,
        .category-menu li.active a .fa-solid.fa-chevron-right {
            color: #fff !important;
        }

        /* Container Spacing & Item Style */
        .faq-accordion .faq-item {
            border-radius: 8px !important;
            overflow: hidden;
            margin-bottom: 16px !important;
            /* Replaces the space20 div cleanly */
        }

        /* --- COLLAPSED STATE (Light Blue/Grey Bars) --- */
        .faq-accordion .faq-item .accordion-button.collapsed {
            background-color: #f0f3fa;
            /* Light background from screenshot */
            color: #0b4a1a;
            /* Dark green text color */
            font-weight: 600;
            border-radius: 8px;
            border: none;
        }

        /* --- EXPANDED STATE (Active Green Bar) --- */
        .faq-accordion .faq-item .accordion-button:not(.collapsed) {
            background-color: #007a1a;
            /* Rich green background */
            color: #ffffff;
            /* White text */
            font-weight: 600;
            box-shadow: none;
            /* Remove default bootstrap blue glow */
            border-radius: 8px 8px 0 0;
        }

        /* Ensure body matches active green panel */
        .faq-accordion .faq-item .accordion-collapse {
            background-color: #007a1a;
            color: #ffffff;
            border-radius: 0 0 8px 8px;
        }

        .faq-accordion .faq-item .accordion-body {
            padding-top: 0;
            /* Snug fit against the question header */
            padding-bottom: 20px;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* --- CUSTOM ARROW BUTTONS --- */
        /* Base reset for default Bootstrap indicators */
        .faq-accordion .accordion-button::after {
            background-image: none !important;
            /* Hide standard arrow icon */
            font-family: Arial, sans-serif;
            /* Clean system text arrow fallback */
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        /* Collapsed state arrow (Green Circle with white downward arrow) */
        .faq-accordion .accordion-button.collapsed::after {
            content: "∨";
            background-color: #007a1a;
            color: #ffffff;
            transform: rotate(0deg);
        }

        /* Expanded state arrow (White Circle with green upward arrow) */
        .faq-accordion .accordion-button:not(.collapsed):::after {
            content: "∧";
            background-color: #ffffff;
            color: #007a1a;
            transform: rotate(0deg);
            /* Explicitly set alignment */
        }
    </style>
<body class="body-bg2">

    <!--===== PRELOADER STARTS =======-->
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
    <!--===== PROGRESS ENDS=======-->

    <!--=====HEADER START=======-->
    <header class="homepage2-body">
        <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
            <div class="container headerfix">
                <div class="row align-items-center row-bg2">
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="vl-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <div class="vl-main-menu text-center">
                            <nav id="navbar-example2" class="vl-mobile-menu-active navbar justify-content-center">
                                <ul class="nav-pills">
                                    <li class="nav-item"><a href="{{ route('landingpages') }}"
                                            class="nav-link"><span>Home</span></a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('landingpages') }}#about"
                                            class="nav-link"><span>About Us</span></a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('landingpages') }}#courses"
                                            class="nav-link"><span>Courses</span></a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('landingpages') }}#faq"
                                            class="nav-link"><span>FAQ</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="vl-hero-btn d-none d-lg-block text-end">
                            <span class="vl-btn-wrap text-end">
                                <a href="{{ route('contact') }}" class="vl-btn3"><span class="demo">Get In Touch</span><span
                                        class="arrow"><i class="fa-solid fa-arrow-right"></i></span> </a>
                            </span>
                        </div>
                        <div class="vl-header-action-item d-block d-lg-none">
                            <button type="button" class="vl-offcanvas-toggle">
                                <i class="fa-solid fa-bars-staggered"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="homepage2-body">
        <div class="vl-offcanvas">
            <div class="vl-offcanvas-wrapper">
                <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                    <div class="vl-offcanvas-logo">
                        <a href="{{ route('landingpages') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                alt=""></a>
                    </div>
                    <div class="vl-offcanvas-close">
                        <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </div>

                <div class="vl-offcanvas-menu d-lg-none mb-40">
                    <nav></nav>
                </div>

                <div class="space20"></div>
                <div class="vl-offcanvas-info">
                    <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                    <div class="space20"></div>
                    <span><a href="tel:+919500244679"> <i class="fa-regular fa-envelope"></i> +91 9500244679</a></span>
                    <span><a href="mailto:arunaiacademyforbotany100@gmail.com"><i class="fa-solid fa-phone"></i>
                            arunaiacademyforbotany100@gmail.com</a></span>
                    <span><a href="#"><i class="fa-solid fa-location-dot"></i> 3/2F Emakuttiyur turn Dharmapuri,
                            Tmail
                            Nadu - 636705, India</a></span>
                </div>
                <div class="space20"></div>
                <div class="vl-offcanvas-social">
                    <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
                    <div class="space20"></div>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
        </div>
        <div class="vl-offcanvas-overlay"></div>
    </div>
    <!--===== MOBILE HEADER STARTS =======-->


    <!--===== HERO AREA STARTS =======-->
    <div class="hero2-section-area" style="background-image: url({{ asset('landing/assets/img/all-images/bg/hero-bg3.png') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero2-header heading3">
                        <h5 data-aos="fade-left" data-aos-duration="800"><img
                                src="{{ asset('landing/assets/img/icons/sub-logo2.svg') }}" alt="">Botany Class
                        </h5>
                        <div class="space24"></div>
                        <h1 class="text-anime-style-3">Arunai Academy</h1>
                        <div class="space18"></div>
                        <p data-aos="fade-left" data-aos-duration="900">Welcome to Arunai Academy, the leading
                            <strong>PG TRB Botany Coaching Centre Tamil Nadu</strong>. We specialize in comprehensive
                            coaching tailored to help students excel in their competitive exams. Our vast syllabus
                            covers all essential topics, ensuring no preparation gaps. With expert faculty and a proven
                            track record of success, we are dedicated to providing a user-friendly learning experience
                            that empowers our students to achieve their academic goals. Join us today and take the first
                            step towards your future.
                        </p>
                        <div class="space32"></div>
                        <div class="counter-boxarea">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6" data-aos-duration="800">
                                    <div class="counter-box">
                                        <h2><span class="counter">200</span>K</h2>
                                        <div class="space16"></div>
                                        <p>Happy Customer</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6" data-aos-duration="900">
                                    <div class="counter-box">
                                        <h2><span class="counter">20</span>+</h2>
                                        <div class="space16"></div>
                                        <p>Years Experience</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4" data-aos-duration="1000">
                                    <div class="space30 d-md-none d-block"></div>
                                    <div class="counter-box box2">
                                        <h2><span class="counter">24</span>/<span class="counter">7</span></h2>
                                        <div class="space16"></div>
                                        <p>Customer Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="enquiry-card">
                        <h4 class="enquiry-title">Enquiry Form</h4>
                        <form method="POST" class="enquiry-form">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                             <div class="mb-3">

                                    <label class="mb-2 d-block">
                                        Course Interest
                                    </label>

                                    <select name="subject" class="form-control subject w-100">

                                        <option value="">
                                            Select a course
                                        </option>

                                        <optgroup label="UG Programs">
                                            <option value="Botany UG">
                                                Botany UG
                                            </option>
                                        </optgroup>

                                        <optgroup label="PG Programs">
                                            <option value="Botany PG">
                                                Botany PG
                                            </option>
                                        </optgroup>

                                        <option value="Other / General Enquiry">
                                            Other / General Enquiry
                                        </option>

                                    </select>

                                    <span class="form4-error text-danger"></span>

                                </div>

                                <div class="mb-3">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control" rows="3"></textarea>
                                    <span class="form4-error text-danger"></span>
                                </div>

                                {{-- CAPTCHA --}}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="number" name="captcha" class="form-control"
                                            placeholder="Enter Answer">
                                        <span class="form4-error text-danger"></span>
                                    </div>

                                    <div class="col-md-6 mb-3 d-flex align-items-center gap-2">
                                       <input type="text" id="math-question" class="form-control"
    value="5 + 3 = ?"  readonly
    style="max-width:150px;color:black;">

                                        <button type="button" class="btn btn-danger" >↻</button>
                                    </div>
                                </div>

                            <button type="submit" class="enquiry-btn w-100">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <!--===== ABOUT AREA STARTS =======-->
        <div class="about3-section-area sp1 pb-0">
            <div class="container" id="about">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="images">
                                    <img src="{{ asset('landing/assets/img/all-images/about/about-img4.png') }}" alt=""
                                        class="elements27">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-header-area heading5">
                            <h5 data-aos-duration="700">About Eitech help desk</h5>
                            <div class="space20"></div>
                            <h2 class="text-anime-style-3">Our Team Ready to Assist You Anytime, Anywheres</h2>
                            <div class="space18"></div>
                            <p data-aos-duration="800">Our Help Desk is staffed with experienced
                                professionals who on are committed to providing you with the solutions you need, as
                                quickly and efficiently as possible. whether you're dealing with. Our Help Desk is
                                staffed with experienced
                                professionals who on are committed to providing you with the solutions you need, as
                                quickly and efficiently as possible. whether you're dealing with.</p>
                            <p data-aos-duration="800" class="mt-3">Our Help Desk is staffed with experienced
                                professionals who on are committed to providing you with the solutions you need, as
                                quickly and efficiently as possible. whether you're dealing with.</p>
                            <div class="space16"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 my-5">
                        <div class="row">
                            <div class="col-sm-8 col-12">
                                <div class="about-header-area heading5 p-0">
                                    <div class="space20"></div>
                                    <h2 class="text-anime-style-3" style="font-size: 30px">Our Team Ready to Assist
                                        You
                                        Anytime, Anywheres</h2>
                                    <div class="space18"></div>
                                    <p data-aos-duration="800">Our Help Desk is staffed with experienced
                                        professionals who on are committed to providing you with the solutions you need,
                                        as
                                        quickly and efficiently as possible. whether you're dealing with. Our Help Desk
                                        is
                                        staffed with experienced
                                        professionals who on are committed to providing you with the solutions you need,
                                        as
                                        quickly and efficiently as possible. whether you're dealing with.</p>
                                    <p data-aos-duration="800" class="mt-3">Our Help Desk is staffed with
                                        experienced
                                        professionals who on are committed to providing you with the solutions you need,
                                        as
                                        quickly and efficiently as possible. whether you're dealing with.</p>
                                    <div class="space16"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="category-card">
                                    <h4 class="category-title">Category List</h4>

                                    <ul class="category-menu">
                                        <li class="active">
                                            <span class="arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                            UGTRB
                                        </li>
                                        <li>PGTRB</li>
                                        <li>BOTANY</li>
                                        <li>UGTRB - Botany</li>
                                        <li>Zoology</li>
                                        <li>Chemistry</li>
                                        <li>Physics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="courses" class="service5-section-area mb-5"
                style="background: #002630; background-repeat: no-repeat; background-position: center; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-header heading7 space-margin60">
                                <h5 class="bg-transparent"><span><img src="landing/assets/img/icons/sub-logo1.svg"
                                            alt=""></span>Our Courses</h5>
                                <div class="space18"></div>
                                <h2 class="text-anime-style-3">Our Best Bespoke Solution</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service5-slider-box owl-carousel">
                                <div class="service-slider-box">
                                    <div class="space24"></div>
                                    <div class="content-area">
                                        <a href="service-single.html">Custom Edit Tool</a>

                                        <p>Design your page in real time and see the results instantly. Create an
                                            customize your all landing pages.</p>
                                    </div>
                                </div>

                                <div class="service-slider-box">
                                    <div class="space24"></div>
                                    <div class="content-area">
                                        <a href="service-single.html">Easy To Customize</a>

                                        <p>We bring your ideas to life with mobile applications designed to deliver
                                            results our team of expert.</p>
                                    </div>
                                </div>

                                <div class="service-slider-box">
                                    <div class="space24"></div>
                                    <div class="content-area">
                                        <a href="service-single.html">Built In Safety Chat</a>

                                        <p>Ensuring your app reaches its full potential on iOS, Android, or both. From
                                            the initial concept to post.</p>
                                    </div>
                                </div>

                                <div class="service-slider-box">
                                    <div class="space24"></div>
                                    <div class="content-area">
                                        <a href="service-single.html">Custom Edit Tool</a>

                                        <p>Design your page in real time and see the results instantly. Create an
                                            customize your all landing pages.</p>
                                    </div>
                                </div>

                                <div class="service-slider-box">
                                    <div class="space24"></div>
                                    <div class="content-area">
                                        <a href="service-single.html">Easy To Customize</a>

                                        <p>We bring your ideas to life with mobile applications designed to deliver
                                            results our team of expert.</p>
                                    </div>
                                </div>

                                <div class="service-slider-box">
                                    <div class="space24"></div>
                                    <div class="content-area">
                                        <a href="service-single.html">Built In Safety Chat</a>

                                        <p>Ensuring your app reaches its full potential on iOS, Android, or both. From
                                            the initial concept to post.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-inner-section-area sp1" id="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 m-auto">
                            <div class="heading2 text-center space-margin60">
                                <h2>Frequently Asked Question</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="faq-widget-area">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        <div class="faq-section-area">
                                            <div class="row">
                                                <div class="col-lg-10 m-auto">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFour">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFour"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFive">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFive"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <div class="faq-section-area">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample3">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseEleven"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseEleven">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseEleven"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample3">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwelve"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwelve">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwelve"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample3">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirteen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirteen">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirteen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample3">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourteen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourteen">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourteen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample3">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFifteen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFifteen">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFifteen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample3">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample4">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtysix"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseThirtysix">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtysix"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample4">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtyseven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtyseven">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtyseven"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample4">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtyeight"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtyeight">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtyeight"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample4">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtynine"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtynine">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtynine"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample4">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourty"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourty">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourty"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample4">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab" tabindex="0">
                                        <div class="faq-section-area">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample5">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSixteen"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseSixteen">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSixteen"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample5">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeventeen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSeventeen">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseSeventeen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample5">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseEightteen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseEightteen">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseEightteen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample5">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseNineteen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseNineteen">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseNineteen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample5">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwenty"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwenty">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwenty"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample5">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample6">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtyone"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseFourtyone">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtyone"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample6">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtytwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtytwo">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtytwo"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample6">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtythree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtythree">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtythree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample6">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtyfour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtyfour">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtyfour"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample6">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtyfive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtyfive">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtyfive"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample6">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel"
                                        aria-labelledby="pills-contact1-tab" tabindex="0">
                                        <div class="faq-section-area">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample7">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentyone"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseTwentyone">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentyone"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample7">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentytwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentytwo">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentytwo"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample7">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentythree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentythree">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentythree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample7">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentyfour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentyfour">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentyfour"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample7">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentyfive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentyfive">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentyfive"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample7">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample8">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtySix"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseFourtySix">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtySix"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample8">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtySeven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtySeven">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtySeven"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample8">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtyEight"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtyEight">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtyEight"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample8">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtyNine"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtyNine">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtyNine"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample8">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFourtyTen"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFourtyTen">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseFourtyTen"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample8">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                        aria-labelledby="pills-contact2-tab" tabindex="0">
                                        <div class="faq-section-area">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample9">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentysix"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseTwentysix">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentysix"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample9">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentyseven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentyseven">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentyseven"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample9">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentyeight"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentyeight">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentyeight"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample9">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwentynine"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwentynine">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwentynine"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample9">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirty"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirty">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirty"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample9">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample10">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtyone"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseThirtyone">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtyone"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample10">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtytwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtytwo">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtytwo"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample10">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtythree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtythree">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtythree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample10">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtyfour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtyfour">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtyfour"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample10">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThirtyfive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThirtyfive">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThirtyfive"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample10">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact3" role="tabpanel"
                                        aria-labelledby="pills-contact3-tab" tabindex="0">
                                        <div class="faq-section-area">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample11">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse1"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapse1">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse1"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#accordionExample11">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse2"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse2">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse2"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample11">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse3"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse3">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse3"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample11">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse4"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse4">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse4"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample11">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse5"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse5">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse5"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample11">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="accordian-area">
                                                        <div class="accordion" id="accordionExample12">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse6"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapse6">
                                                                        What types of IT solutions do you offer?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse6"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample12">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse7"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse7">
                                                                        What is your policy on data backup and recovery?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse7"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample12">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse8"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse8">
                                                                        How can IT solutions benefit my business?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse8"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample12">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse9"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse9">
                                                                        What industries do you specialize in?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse9"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample12">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse10"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse10">
                                                                        What is the process for onboarding new client?
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse10"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionExample12">
                                                                    <div class="accordion-body">
                                                                        <p>We implement robust data backup and recovery
                                                                            solutions best protect your data and ensure
                                                                            business
                                                                            continuity in case of IT unexpected events.
                                                                            We
                                                                            provide regular updates and status .</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--===== FOOTER AREA STARTS =======-->
            <div class="vl-footer2-section-area sp8">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-logo1">
                                <img src="{{ asset('assets/images/logo.png') }}" class="" alt="">
                                <div class="space16"></div>
                                <p>We provide expert best services technology to meet your unique needs. Whether you’re
                                    looking.</p>
                                <div class="space24"></div>
                                <ul>
                                    <li><a target="_blank" rel="noopener"
                                            href="https://api.whatsapp.com/send?phone=919500244679&text=Hello%20Arunai%20Academy"
                                            class="social-btn" aria-label="Chat on WhatsApp">
                                            <i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li> <a target="_blank"
                                            href="https://www.instagram.com/arunai_academy_botany_coaching/"
                                            class="social-btn"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a target="_blank"
                                            href="https://youtube.com/@arunaiacademy9219?si=MOgEo22Kzj1_sR3S"
                                            class="social-btn"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li>
                                        <a target="_blank"
                                            href="https://www.facebook.com/groups/1236018409928472/?ref=share&mibextid=NSMWBT"
                                            class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="vl-footer-widget">
                                <div class="space30 d-lg-none d-block"></div>
                                <h3>Our Courses</h3>
                                <ul>
                                    <li><a href="#">UGTRB - Botany</a></li>
                                    <li><a href="#">PGRTB - Botany</a></li>
                                    <li><a href="#">UGTRB - Botany</a></li>
                                    <li><a href="#">PGRTB - Botany</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="vl-footer-widget">
                                <div class="space30 d-lg-none d-block"></div>
                                <h3>Contact Us</h3>
                                <ul>
                                    <li><img src="{{ asset('landing/assets/img/icons/phn1.svg') }}"
                                            alt=""><a href="tel:+919500244679">+91 9500244679</a></li>
                                    <li><img src="{{ asset('landing/assets/img/icons/location1.svg') }}"
                                            alt=""><a href="#">3/2F
                                            Emakuttiyur turn Dharmapuri, Tamil Nadu - 636705, India</a></li>
                                    <li><img src="{{ asset('landing/assets/img/icons/email1.svg') }}"
                                            alt=""><a
                                            href="mailto:arunaiacademyforbotany100@gmail.com">arunaiacademyforbotany100@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="vl-copyright-area">
                                <p>© Copyright 2026 - Arubnai Academy.</p>
                                <p>Designed by <a href="https://webbitech.com" target="_blank">Webbitech</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== FOOTER AREA ENDS =======-->
        </div>
    </div>

    <!--===== JS SCRIPT LINK =======-->
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
