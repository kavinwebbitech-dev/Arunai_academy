@extends('frontend.layouts.app')
@section('content')
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you. Reach out to us anytime.</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>Contact Us</span>
            </div>
        </div>
    </section>

    <!-- Quick Info Strip -->
    <div class="contact-sec" style="background:var(--white);padding:2rem;box-shadow:0 2px 20px rgba(0,0,0,0.06);">
        <div class="container">
            <div class="contact-row"
                style="auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1.5rem;text-align:center;">
                <a href="tel:+919876543210"
                    style="text-decoration:none;padding:1rem;border-radius:14px;transition:all 0.3s;"
                    onmouseover="this.style.background='#f0faf2'" onmouseout="this.style.background=''">
                    <div style="font-size:1.8rem;margin-bottom:0.4rem;"><i class="fa-solid fa-phone"></i></div>
                    <div style="font-weight:600;color:var(--dark);font-size:0.9rem;">Call Us</div>
                    <div style="color:var(--green-mid);font-size:0.85rem;margin-top:0.2rem;">+91 9500244679</div>
                    <div style="color:var(--green-mid);font-size:0.85rem;margin-top:0.2rem;">+91 7010753971</div>
                </a>
                <a href="mailto:info@arunaiacademy.in"
                    style="text-decoration:none;padding:1rem;border-radius:14px;transition:all 0.3s;"
                    onmouseover="this.style.background='#f0faf2'" onmouseout="this.style.background=''">
                    <div style="font-size:1.8rem;margin-bottom:0.4rem;"><i class="fa-regular fa-envelope"></i></div>
                    <div style="font-weight:600;color:var(--dark);font-size:0.9rem;">Email Us</div>
                    <div style="color:var(--green-mid);font-size:0.85rem;margin-top:0.2rem;">
                        arunaiacademyforbotany100@gmail.com</div>
                </a>
                <a href="mailto:info@arunaiacademy.in"
                    style="text-decoration:none;padding:1rem;border-radius:14px;transition:all 0.3s;"
                    onmouseover="this.style.background='#f0faf2'" onmouseout="this.style.background=''">
                    <div style="font-size:1.8rem;margin-bottom:0.4rem;"><i class="fa-solid fa-map-marker-alt"></i></div>
                    <div style="font-weight:600;color:var(--dark);font-size:0.9rem;">Visit Us</div>
                    <div style="color:var(--green-mid);font-size:0.85rem;margin-top:0.2rem;">3/2F
                        Emakuttiyur turn
                        Dharmapuri, Tamilnadu-636705
                        India
                    </div>
                </a>
                <a href="mailto:info@arunaiacademy.in"
                    style="text-decoration:none;padding:1rem;border-radius:14px;transition:all 0.3s;"
                    onmouseover="this.style.background='#f0faf2'" onmouseout="this.style.background=''">
                    <div style="font-size:1.8rem;margin-bottom:0.4rem;"><i class="fa-solid fa-clock"></i></div>
                    <div style="font-weight:600;color:var(--dark);font-size:0.9rem;">Working Hours</div>
                    <div style="color:var(--green-mid);font-size:0.85rem;margin-top:0.2rem;">Mon - Sat: 8 AM - 7 PM</div>
                </a>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="contact-grid">
                <!-- Info -->
                <div class="reveal">
                    <div class="section-tag">Reach Us</div>
                    <h2 class="section-title" style="margin-bottom:2rem;">We're Here to <span class="accent">Help You</span>
                    </h2>

                    <div class="contact-info-item">
                        <div class="contact-icon-wrap"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <h4>Address</h4>
                            <p>3/2F
                                Emakuttiyur turn
                                Dharmapuri,<br> Tamilnadu-636705
                                India</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon-wrap"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <h4>Phone Numbers</h4>
                            <p>+91 9500244679 <br />+91 7010753971</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon-wrap"><i class="fa-regular fa-envelope"></i></div>
                        <div>
                            <h4>Email Address</h4>
                            <p>arunaiacademyforbotany100@gmail.com</p>
                        </div>
                    </div>

                    <div
                        style="border-radius:18px;overflow:hidden;height:220px;background:linear-gradient(135deg,#0a1f0e,#1a5c2a);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:0.5rem;margin-top:1rem;">
                        <div style="font-size:3rem;color:rgba(255,255,255,0.3);">🗺️</div>
                        <div style="color:rgba(255,255,255,0.5);font-size:0.88rem;">Google Maps – Dharmapuri,
                            Tamilnadu-636705
                        </div>
                        <a href="https://maps.app.goo.gl/5p4XYtre84PCCcCw8" target="_blank" class="btn-outline"
                            style="font-size:0.8rem;padding:0.5rem 1.2rem;margin-top:0.5rem;">Open in Maps ↗</a>
                    </div>

                </div>

                <!-- Form -->
                <div class="reveal">
                    <div class="contact-form">
                        <h3
                            style="font-family:'Playfair Display',serif;font-size:1.5rem;margin-bottom:0.3rem;color:var(--dark);">
                            Send Us a Message</h3>
                        <p style="color:var(--gray);font-size:0.88rem;margin-bottom:1.8rem;">Fill out the form below and our
                            team will get back to you within 24 hours.</p>

                        {{-- <form method="POST" action="{{ route('enquiry.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" placeholder="Enter first name" required />
                                </div>
                                <div class="form-group">
                                    <label>Email Address *</label>
                                    <input type="email" name="email" placeholder="your@email.com" required />
                                </div>
                                <div class="form-group">
                                    <label>Phone Number *</label>
                                    <input type="tel" name="phone" placeholder="+91 00000 00000" required />
                                </div>
                                <div class="form-group">
                                    <label>Course Interest</label>
                                    <select name="subject" >
                                        <option value="">Select a course</option>
                                        <optgroup label="UG Programs">
                                            <option>Botany</option>
                                        </optgroup>
                                        <optgroup label="PG Programs">
                                            <option>Botany</option>
                                        </optgroup>
                                        <option>Other / General Enquiry</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message"
                                    placeholder="Tell us your queries, requirements or anything you'd like us to know..."></textarea>
                            </div>

                            <button type="submit" type="submit" class="btn-primary"
                                style="width:100%;justify-content:center;font-size:1rem;padding:1rem;">
                                Send Message →
                            </button>
                        </form> --}}

                        <form id="contactForm4" method="POST" action="{{ route('enquiry.store') }}">
                            @csrf
                            <input type="hidden" name="type" value="contact Us" />
                            <div class="form-row">

                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" placeholder="Enter first name"
                                        class="form-control" />
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Email Address *</label>
                                    <input type="email" name="email" placeholder="your@email.com"
                                        class="form-control" />
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Phone Number *</label>
                                    <input type="tel" name="phone" placeholder="+91 00000 00000" class="form-control"
                                        maxlength="10" />
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Course Interest</label>
                                    <select name="subject" class="form-control">
                                        <option value="">Select a course</option>

                                        <optgroup label="UG Programs">
                                            <option value="Botany UG">Botany</option>
                                        </optgroup>

                                        <optgroup label="PG Programs">
                                            <option value="Botany PG">Botany</option>
                                        </optgroup>

                                        <option value="Other / General Enquiry">
                                            Other / General Enquiry
                                        </option>
                                    </select>

                                    <span class="form4-error text-danger"></span>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Your Message</label>

                                <textarea name="message" class="form-control"
                                    placeholder="Tell us your queries, requirements or anything you'd like us to know..."></textarea>

                                <span class="form4-error text-danger"></span>
                            </div>

                            {{-- CAPTCHA --}}
                            <div class="form-row">

                                <div class="form-group">
                                    <input type="number" name="captcha" class="form-control"
                                        placeholder="Enter Answer">

                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="form-group d-flex align-items-center gap-2">

                                    <input type="text" id="math-question" class="form-control" readonly
                                        style="max-width:150px;color:black;">

                                    <button type="button" class="btn btn-danger" onclick="loadCaptcha()">↻</button>

                                </div>

                            </div>

                            <button type="submit" id="submitBtn" class="btn-primary"
                                style="width:100%;justify-content:center;font-size:1rem;padding:1rem;">

                                <span class="btn-text">Send Message →</span>
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

    <!-- FAQ Section -->
    <div style="background:var(--gray-light);padding:80px 2rem;">
        <div style="max-width:800px;margin:0 auto;">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2 class="section-title">Frequently Asked <span class="accent">Questions</span></h2>
            </div>

            <div style="display:flex;flex-direction:column;gap:1rem;">
                <details
                    style="background:var(--white);border-radius:14px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,0.06);">
                    <summary
                        style="padding:1.2rem 1.5rem;cursor:pointer;font-weight:600;color:var(--dark);font-size:0.95rem;list-style:none;display:flex;justify-content:space-between;align-items:center;">
                        When do admissions open for 2025–26? <span style="color:var(--green-mid);">+</span>
                    </summary>
                    <div style="padding:0 1.5rem 1.2rem;color:var(--gray);font-size:0.9rem;line-height:1.8;">
                        Admissions for the academic year 2025–26 are now open. We accept applications on a rolling basis and
                        seats fill up quickly. We recommend reaching out early to secure your spot.
                    </div>
                </details>

                <details
                    style="background:var(--white);border-radius:14px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,0.06);">
                    <summary
                        style="padding:1.2rem 1.5rem;cursor:pointer;font-weight:600;color:var(--dark);font-size:0.95rem;list-style:none;display:flex;justify-content:space-between;align-items:center;">
                        What is the batch size for each program? <span style="color:var(--green-mid);">+</span>
                    </summary>
                    <div style="padding:0 1.5rem 1.2rem;color:var(--gray);font-size:0.9rem;line-height:1.8;">
                        We maintain small batch sizes of 20–25 students per batch to ensure personalised attention. For
                        competitive exam coaching (NEET, JEE, GATE), batches are capped at 15 students.
                    </div>
                </details>

                <details
                    style="background:var(--white);border-radius:14px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,0.06);">
                    <summary
                        style="padding:1.2rem 1.5rem;cursor:pointer;font-weight:600;color:var(--dark);font-size:0.95rem;list-style:none;display:flex;justify-content:space-between;align-items:center;">
                        Do you offer free counselling sessions? <span style="color:var(--green-mid);">+</span>
                    </summary>
                    <div style="padding:0 1.5rem 1.2rem;color:var(--gray);font-size:0.9rem;line-height:1.8;">
                        Yes! We offer completely free career counselling sessions for students and parents. Our expert
                        counsellors help identify the best course path based on individual strengths and goals.
                    </div>
                </details>

                <details
                    style="background:var(--white);border-radius:14px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,0.06);">
                    <summary
                        style="padding:1.2rem 1.5rem;cursor:pointer;font-weight:600;color:var(--dark);font-size:0.95rem;list-style:none;display:flex;justify-content:space-between;align-items:center;">
                        Are hostel facilities available? <span style="color:var(--green-mid);">+</span>
                    </summary>
                    <div style="padding:0 1.5rem 1.2rem;color:var(--gray);font-size:0.9rem;line-height:1.8;">
                        We have tie-ups with nearby hostels and PG accommodations for outstation students. Our staff can
                        assist you in finding safe and comfortable accommodation close to the academy.
                    </div>
                </details>

                <details
                    style="background:var(--white);border-radius:14px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,0.06);">
                    <summary
                        style="padding:1.2rem 1.5rem;cursor:pointer;font-weight:600;color:var(--dark);font-size:0.95rem;list-style:none;display:flex;justify-content:space-between;align-items:center;">
                        What are the fee payment options? <span style="color:var(--green-mid);">+</span>
                    </summary>
                    <div style="padding:0 1.5rem 1.2rem;color:var(--gray);font-size:0.9rem;line-height:1.8;">
                        We accept payments via cash, bank transfer, UPI, and cards. We also offer flexible instalment plans
                        for deserving students. Scholarships are available for economically weaker students based on merit.
                    </div>
                </details>
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

            // Remove error while typing
            $('#contactForm4 .form-control').on('input change', function() {

                $(this).removeClass('form4-invalid');

                $(this).closest('.form-group')
                    .find('.form4-error')
                    .html('');

            });

            $('#contactForm4').on('submit', function(e) {

                e.preventDefault();

                let form = $(this);
                let btn = $('#submitBtn');

                let errors = {};

                // Reset
                $('.form4-error').html('');
                $('.form-control').removeClass('form4-invalid');

                $('#successAlert4').addClass('d-none');

                // Values
                let name = $('[name="name"]').val().trim();
                let email = $('[name="email"]').val().trim();
                let phone = $('[name="phone"]').val().trim();
                let subject = $('[name="subject"]').val();
                let message = $('[name="message"]').val().trim();
                let captcha = $('[name="captcha"]').val();

                // Validation
                if (!name)
                    errors.name = "Name is required";
                else if (!/^[A-Za-z\s]+$/.test(name))
                    errors.name = "Only letters allowed";

                if (!email)
                    errors.email = "Email is required";
                else if (!/^\S+@\S+\.\S+$/.test(email))
                    errors.email = "Invalid email";

                if (!phone)
                    errors.phone = "Phone is required";
                else if (!/^[6-9][0-9]{9}$/.test(phone))
                    errors.phone = "Invalid phone number";

                if (!message)
                    errors.message = "Message is required";

                if (!subject)
                    errors.subject = "Please select a course interest";

                if (!captcha)
                    errors.captcha = "Captcha required";

                // Show Errors
                if (Object.keys(errors).length > 0) {

                    $.each(errors, function(key, value) {

                        let input = $('[name="' + key + '"]');

                        input.addClass('form4-invalid');

                        input.closest('.form-group')
                            .find('.form4-error')
                            .html(value);

                    });

                    return;
                }

                // AJAX
                $.ajax({
                    url: form.attr('action'),
                    type: "POST",
                    data: form.serialize(),

                    beforeSend: function() {

                        btn.prop('disabled', true);

                        btn.find('.btn-text').addClass('d-none');
                        btn.find('.btn-loader').removeClass('d-none');

                    },

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

                                input.closest('.form-group')
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
