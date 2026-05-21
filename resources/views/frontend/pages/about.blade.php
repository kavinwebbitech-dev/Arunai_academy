@extends('frontend.layouts.app')
@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>About Arunai Academy</h1>
            <p>15+ years of shaping successful careers across Tamil Nadu</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a>
                <span class="breadcrumb-sep">›</span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <!-- About Content -->
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

    <!-- Stats -->
    <div class="section-full section-dark" style="text-align:center;">
        <div style="max-width:1400px;margin:0 auto;padding:0 2rem;">
            <div class="section-tag">Our Impact</div>
            <h2 class="section-title" style="color:#fff;margin-bottom:3rem;">Numbers That <span
                    style="color:#5dbf6e">Speak</span></h2>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:2rem;">
                <div class="reveal">
                    <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:#5dbf6e;"><span
                            data-target="5000">0</span>+</div>
                    <div
                        style="color:rgba(255,255,255,0.6);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.3rem;">
                        Students Trained</div>
                </div>
                <div class="reveal">
                    <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:#5dbf6e;"><span
                            data-target="98">0</span>%</div>
                    <div
                        style="color:rgba(255,255,255,0.6);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.3rem;">
                        Pass Rate</div>
                </div>
                <div class="reveal">
                    <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:#5dbf6e;"><span
                            data-target="320">0</span>+</div>
                    <div
                        style="color:rgba(255,255,255,0.6);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.3rem;">
                        Rank Holders</div>
                </div>
                <div class="reveal">
                    <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:#5dbf6e;"><span
                            data-target="45">0</span>+</div>
                    <div
                        style="color:rgba(255,255,255,0.6);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.3rem;">
                        Expert Faculty</div>
                </div>
                <div class="reveal">
                    <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:#5dbf6e;"><span
                            data-target="15">0</span>+</div>
                    <div
                        style="color:rgba(255,255,255,0.6);font-size:0.9rem;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.3rem;">
                        Years Experience</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision -->
    <div class="section">
        <div class="container">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;" class="reveal">
                <div style="background:radial-gradient(#006b4e, #194360, #124963);border-radius:24px;padding:2.5rem;color:#fff;">
                    <div style="font-size:2.5rem;margin-bottom:1rem;">🎯</div>
                    <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;margin-bottom:1rem;">Our Mission</h3>
                    <p style="color:rgba(255,255,255,0.8);line-height:1.8;font-size:0.95rem;">Our mission is to provide result-oriented Botany coaching that helps every aspirant achieve their dream of becoming a government teacher.</p>
                    <h4>We focus on: </h4>
                    <ul class="mission-list">
                        <li>Strong conceptual understanding </li>
                        <li>Exam-oriented preparation </li>
                        <li>Regular tests and evaluation </li>
                        <li>Personal guidance and mentoring </li>
                        <li>Rank-focused revision strategies   </li>
                    </ul>
                </div>
                <div style="background:var(--white);border-radius:24px;padding:2.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.06);border:1px solid rgba(45,140,78,0.1);">
                    <div style="font-size:2.5rem;margin-bottom:1rem;">👁️</div>
                    <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;margin-bottom:1rem;color:var(--dark);">
                        Our
                        Vision</h3>
                    <p style="color:var(--gray);line-height:1.8;font-size:0.95rem;">To be the most trusted educational
                        institution in Tamil Nadu, recognised for producing ethical, capable professionals who lead with
                        integrity and innovation.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="why-arunai py-60">
        <div class="container">
            <div class="why-title">
                <h2 class="section-title">Why Choose <span class="accent">Arunai Academy?</span></h2>
                <p>At Arunai Academy, we do not just teach Botany — we create rank holders.</p>
            </div>

            <div class="why-cards">
                <div class="why-box">Exclusive focus on Botany </div>
                <div class="why-box">Experienced and dedicated faculty </div>
                <div class="why-box">Deep concept-based teaching </div>
                <div class="why-box">Complete syllabus coverage </div>
                <div class="why-box">Exam-focused study materials</div>
                <div class="why-box">Regular test series </div>
                <div class="why-box">Previous year question analysis </div>
                <div class="why-box">Structured revision programs </div>
                <div class="why-box">Proven success record </div>
            </div>
        </div>
    </section>

@endsection
