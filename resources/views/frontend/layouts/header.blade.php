<!-- ══ NAVBAR ══ -->
<nav id="navbar">
    <div class="nav-inner">
        <a href="{{ route('index') }}" class="nav-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Arunai Academy" />
            {{-- <span class="logo-text"
                style="display:none;font-family:'Playfair Display',serif;color:#fff;font-size:1.2rem;font-weight:700;">Arunai
                <span style="color:#5dbf6e">Academy</span></span> --}}
        </a>
        <ul class="nav-menu mb-0">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('pgtrb') }}">PGTRB - BOTANY</a></li>
            <li><a href="{{ route('ugtrb') }}">UGTRB - BOTANY</a></li>
            <li><a href="{{ route('achievers_page') }}">Achievers</a></li>
            <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
            <li class="nav-dropdown">
                <a href="#">Gallery ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('gallery.image', ['years' => 'all']) }}">Image Gallery</a></li>
                    <li><a href="{{ route('gallery.video') }}">Video Gallery</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li class="highlight-btn"><a href="{{ route('index') }}#study">Study Material</a></li>
        </ul>
        <button class="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
    <div class="mobile-highlight">
        <h4>Exclusively for Botany</h4>
        <span>PGTRB, UGTRB </span>
    </div>
</nav>

<!-- Mobile Nav -->
<div class="mobile-nav">
    <a href="{{ route('index') }}" class="active">Home</a>
    <a href="{{ route('about') }}">About Us</a>
    <a href="{{ route('ugtrb') }}">UG Courses</a>
    <a href="{{ route('pgtrb') }}">PG Courses</a>
    <a href="{{ route('achievers_page') }}">Achievers</a>
    <a href="{{ route('testimonial') }}">Testimonial</a>
    <a href="{{ route('gallery.image', ['years' => 'all']) }}" class="mobile-sub">🖼 Image Gallery</a>
    <a href="{{ route('gallery.video') }}" class="mobile-sub">▶ Video Gallery</a>
    <a href="{{ route('contact') }}">Contact Us</a>
    <li class="highlight-btn"><a href="{{ route('index') }}#study">Study Material</a></li>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".nav-menu a");

        // Highlight based on current URL
        const currentPath = window.location.pathname.split("/").pop();

        links.forEach(link => {
            const linkPath = link.getAttribute("href").split("/").pop();

            if (linkPath === currentPath) {
                link.classList.add("active");

                // If inside dropdown, also highlight parent
                const dropdown = link.closest(".nav-dropdown");
                if (dropdown) {
                    dropdown.querySelector("a").classList.add("active");
                }
            }

            // Click event to switch active
            link.addEventListener("click", function () {
                links.forEach(l => l.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });
</script>
