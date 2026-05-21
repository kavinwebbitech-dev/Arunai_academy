@extends('frontend.landing-pages.layouts.app')

@section('meta_title', $page->meta_title ?? 'landing page')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keyword', $page->meta_keyword ?? '')

@section('content')
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
    <div class="body-bg2">
        <div class="hero2-section-area"
            style="background-image: url({{ asset('landing/assets/img/all-images/bg/hero-bg3.png') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero2-header heading3">
                            <h5 data-aos="fade-left" data-aos-duration="800"><img
                                    src="{{ asset('landing/assets/img/icons/sub-logo2.svg') }}" alt="">Botany Class
                            </h5>
                            <div class="space24"></div>
                            <h1 class="text-anime-style-3"> {!! $page->name ?? '' !!} </h1>
                            <div class="space18"></div>
                            <p data-aos="fade-left" data-aos-duration="900">{!! $page->banner_content ?? '' !!}
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

                            <form id="contactForm4" method="POST" action="{{ route('enquiry.store') }}"
                                class="enquiry-form">
                                @csrf

                                <input type="hidden" name="type" value="landing">

                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" maxlength="10">
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                    <span class="form4-error text-danger"></span>
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
                                        <input type="text" id="math-question" class="form-control" readonly
                                            style="max-width:150px;color:black;">

                                        <button type="button" class="btn btn-danger" onclick="loadCaptcha()">↻</button>
                                    </div>
                                </div>

                                <button type="submit" id="submitBtn" class="enquiry-btn w-100">
                                    <span class="btn-text">Submit Enquiry</span>
                                    <span class="btn-loader d-none">Loading...</span>
                                </button>

                                <p id="successAlert4" class="d-none text-success text-center mt-3">
                                    ✓ Inquiry Received! We will contact you shortly.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
            <!--===== ABOUT AREA STARTS =======-->
            <div class="about3-section-area sp1 pb-0">

                <div class="container" id="about">
                    <div class="row">

                        {{-- LEFT CONTENT --}}
                        <div class="col-lg-8">
                            <div class="about-header-area heading5">
                                {!! $page->page_content ?? '' !!}
                            </div>
                        </div>

                        {{-- RIGHT SIDEBAR --}}
                        <div class="col-lg-4">

                            <div class="right-sidebar-sticky">

                                {{-- IMAGE --}}
                                <div class="images mb-4">
                                    <img src="{{ asset('landing/assets/img/all-images/about/about-img4.png') }}"
                                        alt="About Image" class="img-fluid sidebar-image">
                                </div>

                                {{-- CATEGORY --}}
                                <div class="category-card">

                                    <h4 class="category-title">
                                        Category List
                                    </h4>

                                    <ul class="category-menu">

                                        @foreach ($services as $service)
                                            <li class="{{ request()->segment(2) == $service->slug ? 'active' : '' }}">

                                                <a
                                                    href="{{ route('service.detail', $service->slug ?? Str::slug($service->name)) }}">

                                                    <span class="arrow">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>

                                                    {{ $service->name }}

                                                </a>

                                            </li>
                                        @endforeach

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>



                <div id="courses" class="service5-section-area mt-5"
                    style="background: #002630; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="service-header heading7 space-margin60">
                                    <h5 class="bg-transparent"><span><img
                                                src="{{ asset('landing/assets/img/icons/sub-logo1.svg') }}"
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
                                                            <div class="accordion faq-accordion" id="accordionExample">

                                                                @php
                                                                    $faqs = json_decode($page->faqs, true);
                                                                @endphp

                                                                @if (isset($page) && !empty($page->faqs) && !empty($faqs))

                                                                    @foreach ($faqs as $faqIndex => $faq)
                                                                        @php
                                                                            $questions = array_map(
                                                                                'trim',
                                                                                explode('/ ', $faq['question'] ?? ''),
                                                                            );
                                                                            $answers = array_map(
                                                                                'trim',
                                                                                explode('/ ', $faq['answer'] ?? ''),
                                                                            );
                                                                        @endphp

                                                                        @foreach ($questions as $index => $title)
                                                                            @php
                                                                                $collapseId =
                                                                                    'collapse_' .
                                                                                    $faqIndex .
                                                                                    '_' .
                                                                                    $index;
                                                                                $isFirst =
                                                                                    $faqIndex == 0 && $index == 0;
                                                                            @endphp

                                                                            <div
                                                                                class="accordion-item faq-item mb-3 border-0 bg-transparent">

                                                                                <h2 class="accordion-header">
                                                                                    <button
                                                                                        class="accordion-button {{ $isFirst ? '' : 'collapsed' }}"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#{{ $collapseId }}"
                                                                                        aria-expanded="{{ $isFirst ? 'true' : 'false' }}"
                                                                                        aria-controls="{{ $collapseId }}">

                                                                                        {{ strip_tags($title) }}

                                                                                    </button>
                                                                                </h2>

                                                                                <div id="{{ $collapseId }}"
                                                                                    class="accordion-collapse collapse {{ $isFirst ? 'show' : '' }}"
                                                                                    data-bs-parent="#accordionExample">

                                                                                    <div class="accordion-body p-4">
                                                                                        {!! $answers[$index] ?? '' !!}
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endforeach
                                                                @else
                                                                    <p class="text-center">
                                                                        No FAQs available at this time.
                                                                    </p>
                                                                @endif

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadCaptcha() {
            $.get("{{ url('/math-captcha') }}", function(data) {
                $('#math-question').val(data.question);
            });
        }

        $(document).ready(function() {

            // Load captcha initially
            loadCaptcha();

            $('#contactForm4').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let btn = $('#submitBtn');

                let errors = {};

                // Reset UI
                $('.form4-error').html('');
                $('.form-control').removeClass('form4-invalid');
                $('#successAlert4').addClass('d-none');

                // Values
                let name = $('[name="name"]').val().trim();
                let phone = $('[name="phone"]').val().trim();
                let email = $('[name="email"]').val().trim();
                let subject = $('[name="subject"]').val().trim();
                let message = $('[name="message"]').val().trim();
                let captcha = $('[name="captcha"]').val();

                // Validation
                if (!name)
                    errors.name = "Name is required";
                else if (!/^[A-Za-z\s]+$/.test(name))
                    errors.name = "Only letters allowed";

                if (!phone)
                    errors.phone = "Phone is required";
                else if (!/^[6-9][0-9]{9}$/.test(phone))
                    errors.phone = "Invalid phone number";

                if (!email)
                    errors.email = "Email is required";
                else if (!/^\S+@\S+\.\S+$/.test(email))
                    errors.email = "Invalid email";

                if (!subject)
                    errors.subject = "Course is required";

                if (!message)
                    errors.message = "Message is required";
                else if (message.length < 5)
                    errors.message = "Message must be at least 5 characters";

                // Captcha Validation
                if (!captcha)
                    errors.captcha = "Captcha required";

                // Show Errors
                if (Object.keys(errors).length > 0) {

                    $.each(errors, function(key, value) {

                        let input = $('[name="' + key + '"]');

                        input.addClass('form4-invalid');

                        input.closest('.mb-3, .col-md-6')
                            .find('.form4-error')
                            .html(value);
                    });

                    return;
                }

                // Button Loading
                btn.prop('disabled', true);

                btn.find('.btn-text').addClass('d-none');
                btn.find('.btn-loader').removeClass('d-none');

                // AJAX Submit
                $.ajax({
                    url: form.attr('action'),
                    type: "POST",
                    data: form.serialize(),

                    success: function(response) {

                        $('#successAlert4').removeClass('d-none');

                        form[0].reset();

                        loadCaptcha();

                        setTimeout(() => {
                            $('#successAlert4').addClass('d-none');
                        }, 4000);
                    },

                    error: function(xhr) {

                        if (xhr.status === 422) {

                            let serverErrors = xhr.responseJSON.errors;

                            $.each(serverErrors, function(key, value) {

                                let input = $('[name="' + key + '"]');

                                input.addClass('form4-invalid');

                                input.closest('.mb-3, .col-md-6')
                                    .find('.form4-error')
                                    .html(value[0]);
                            });
                        }
                    },

                    complete: function() {

                        btn.prop('disabled', false);

                        btn.find('.btn-text').removeClass('d-none');
                        btn.find('.btn-loader').addClass('d-none');
                    }
                });

            });

        });
    </script>
@endsection
