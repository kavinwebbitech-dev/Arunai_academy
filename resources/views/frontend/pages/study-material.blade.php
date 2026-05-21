@extends('frontend.layouts.app')
@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Study Materials</h1>
            <p>Download unit-wise notes and model questions for quick Botany exam prep.</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>Achievers</span>
            </div>
        </div>
    </section>

    <section class="study-material" style="border-bottom: 1px solid #fff">
        <div class="container">
            <div class="why-title">
                <h2 class="section-title">Study Materials</h2>
            </div>
            <div class="card-grid">
                @foreach ($materials as $item)
                    <div class="pdf-card">
                        <img src="{{ asset('assets/images/pdf.png') }}" alt="PDF Thumbnail">
                        <h3>{{ $item->title }}</h3>
                        <a href="{{ asset('uploads/materials/'.$item->pdf_file) }}" target="_blank" class="btn">View PDF</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
