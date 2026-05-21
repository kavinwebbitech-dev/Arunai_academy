@extends('frontend.layouts.app')
@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>UG Courses</h1>
            <p>Launch your career with our comprehensive undergraduate programs</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>UG Courses</span>
            </div>
        </div>
    </section>

    <section class="pgtrb-section py-60">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">UGTRB <span class="accent"> Botany Coaching</span></h2>
                <p class="section-subtitle">Our UGTRB Botany course helps students build a strong foundation with exam-oriented teaching, high-scoring topic focus, regular practice, and smart preparation techniques.</p>
            </div>
            <div class="pgtrb-grid">
                <div class="pgtrb-card">
                    <h3>Strong foundation building </h3>
                </div>

                <div class="pgtrb-card">
                    <h3>Exam-oriented teaching </h3>
                </div>

                <div class="pgtrb-card">
                    <h3>Focus on high-scoring areas </h3>
                </div>

                <div class="pgtrb-card">
                    <h3>Smart preparation techniques </h3>
                </div>
            </div>
        </div>
    </section>


    <!-- Admission Banner -->
    <div style="background:linear-gradient(135deg, #004a63, #1a5c2a);padding:70px 2rem;text-align:center;">
        <h2 style="font-family:'Playfair Display',serif;color:#fff;font-size:2rem;margin-bottom:1rem;">Ready to Start Your
            Journey?</h2>
        <p
            style="color:rgba(255,255,255,0.75);margin-bottom:2rem;max-width:500px;display:block;margin-left:auto;margin-right:auto;">
            Admissions are open. Limited seats available. <br>Book your free counselling session today.</p>
        <a href="{{ route('contact') }}" class="btn-primary">Book Free Counselling →</a>
    </div>

@endsection
