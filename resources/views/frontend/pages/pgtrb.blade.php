@extends('frontend.layouts.app')
@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>PG Courses</h1>
            <p>Advance your expertise with our postgraduate coaching programs</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>PG Courses</span>
            </div>
        </div>
    </section>

    <section class="pgtrb-section py-60">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">PGTRB <span class="accent"> Botany Coaching</span></h2>
                <p class="section-subtitle">Our PGTRB Botany course is designed for serious aspirants who aim for top ranks. The course includes complete syllabus coverage, advanced preparation strategies, model exams, intensive revision, and rank-focused training.
                </p>
            </div>
            <div class="pgtrb-grid">
                <div class="pgtrb-card">
                    <h3>Complete syllabus coverage</h3>
                </div>

                <div class="pgtrb-card">
                    <h3>Advanced preparation strategies</h3>
                </div>

                <div class="pgtrb-card">
                    <h3>Model exams & intensive revisions</h3>
                </div>

                <div class="pgtrb-card">
                    <h3>Rank-focused training</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Banner -->
    <div style="background:linear-gradient(135deg, #004a63, #1a5c2a);padding:70px 2rem;text-align:center;">
        <h2 style="font-family:'Playfair Display',serif;color:#fff;font-size:2rem;margin-bottom:1rem;">Advance Your Academic
            Career</h2>
        <p
            style="color:rgba(255,255,255,0.75);margin-bottom:2rem;max-width:500px;display:block;margin-left:auto;margin-right:auto;">
            Speak with our expert counsellors to find the right PG program for your career goals.</p>
        <a href="{{ route('contact') }}" class="btn-primary">Book Free Session →</a>
    </div>

@endsection
