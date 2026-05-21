@extends('frontend.layouts.app')
@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Testimonials</h1>
            <p>What our students and parents say about us</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>Testimonials</span>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Testimonials</div>
                <h2 class="section-title">What Students <span class="accent">Say</span></h2>
                <p class="section-subtitle">Real words from real students who transformed their lives at Arunai Academy.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>Arunai Academy completely transformed my academic journey. The faculty's dedication and the
                        structured study material helped me secure State Rank 1 in Plus Two Board Exams. I am forever
                        grateful!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Ananya Krishnan</h4><span>State Rank 1, 2024 · IIT Madras</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>The NEET coaching at Arunai Academy is unparalleled. The biology faculty's teaching techniques and
                        regular mock tests built my confidence steadily. I cleared NEET in my first attempt!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">K</div>
                        <div class="author-info">
                            <h4>Karthik Subramanian</h4><span>NEET Qualifier · MBBS Student</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>As a parent, I was initially worried about my son's studies. After joining Arunai Academy, his
                        performance improved dramatically. The teachers care for each student personally. Highly
                        recommended!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background:linear-gradient(135deg,#c9a84c,#2d8c4e);">R</div>
                        <div class="author-info">
                            <h4>Mr. Rajendran</h4><span>Parent · Coimbatore</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>JEE preparation at Arunai Academy was an incredible experience. The problem-solving sessions and
                        concept clarity provided by the faculty made complex topics simple and approachable.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">V</div>
                        <div class="author-info">
                            <h4>Vijay Kumar</h4><span>JEE Qualifier · NIT Trichy</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>The commerce coaching here is exceptional. My understanding of accounting and economics has grown
                        tremendously. The CA foundation coaching was especially helpful and well-structured.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">P</div>
                        <div class="author-info">
                            <h4>Priya Meenakshi</h4><span>District Rank 1 · SRCC Delhi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>I joined for GATE preparation and the results speak for themselves. AIR 12 in GATE ECE. The subject
                        experts here have deep knowledge and explain every concept with real-world applications.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">T</div>
                        <div class="author-info">
                            <h4>Thiruveni Rajan</h4><span>GATE AIR 12 · IIT Delhi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>My daughter's transformation after joining Arunai Academy is remarkable. From average scores to
                        District Rank, it is a testament to the quality of teaching and personal attention given here.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background:linear-gradient(135deg,#1a5c2a,#8dc63f);">M</div>
                        <div class="author-info">
                            <h4>Mrs. Meenakumari</h4><span>Parent · Erode</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>The disciplined environment, dedicated teachers and comprehensive study material at Arunai Academy
                        are what every student needs for success. I can vouch for it as an alumnus and now an IAS officer!
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">G</div>
                        <div class="author-info">
                            <h4>Ganesh Babu</h4><span>IAS Officer · Batch of 2015</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal">

                    <div class="quote-icon">"</div>
                    <p>Arunai Academy's unique teaching methods and regular doubt-clearing sessions made all the difference
                        for me. The computer science coaching is top-notch and prepared me well for placements.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>Manoj Durai</h4><span>School Topper · NIT Surathkal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
