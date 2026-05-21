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

                                 <li class="nav-item">
                                     <a href="{{ url()->current() }}" class="nav-link">
                                         <span>Home</span>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ url()->current() }}#about" class="nav-link">
                                         <span>About Us</span>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ url()->current() }}#courses" class="nav-link">
                                         <span>Courses</span>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ url()->current() }}#faq" class="nav-link">
                                         <span>FAQ</span>
                                     </a>
                                 </li>

                             </ul>
                         </nav>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-6">
                     <div class="vl-hero-btn d-none d-lg-block text-end">
                         <span class="vl-btn-wrap text-end">
                             <a href="{{ url(request()->slug) }}" class="vl-btn3"><span class="demo">Get In
                                     Touch</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                             </a>
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
                     <a href="{{ url(request()->slug) }}"><img src="{{ asset('assets/images/logo.png') }}"
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
