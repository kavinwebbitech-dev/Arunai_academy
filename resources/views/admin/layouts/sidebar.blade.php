<style>
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<div id="sidebar" class="sidebar">

    <!-- HEADER -->
    <div class="sidebar-header">
        <img src="{{ asset('assets/images/logo.png') }}" class="sidebar-logo" alt="Logo">

        <button id="sidebarToggle" class="sidebar-toggle">
            <span class="open-icon"><i class="fa-solid fa-x" style="color: rgb(243, 4, 4);"></i></span>
        </button>
    </div>
    
    <ul class="sidebar-menu">
        <li>
            <a href="{{route('admin.dashboard')}}" class="active">
                🏠 <span class="menu-text">Dashboard</span>
            </a>
        </li>
         <li>
            <a href="{{ route('banner') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Add Banner</span>
            </a>
        </li>
         <li>
            <a href="{{ route('admin.achievers.index') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Add Achievers</span>
            </a>
        </li>
        <li>
            <a href="{{ route('studymaterial') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Add Study Material</span>
            </a>
        </li>
        <li>
            <a href="{{ route('category') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Add Gallery</span>
            </a>
        </li>

         <li>
            <a href="{{ route('media.index') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Add Videos</span>
            </a>
        </li>
         <li>
            <a href="{{ route('admin.enquiry.index') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Enquiries</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.sitemap-robots.index') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Sitemap & Robots</span>
            </a>
        </li>
         <li>
            <a href="{{ route('admin.pages.index') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Pages</span>
            </a>
        </li>
         <li>
            <a href="{{ route('admin.service.index') }}">
                <i class="bi bi-grid"></i>
                <span class="menu-text">Services</span>
            </a>
        </li>

    </ul>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const sidebar = document.getElementById("sidebar");

    // Correct selector (single string!)
    const toggleBtns = document.querySelectorAll(
        "#sidebarToggle, #toggleSidebar, #mobileSidebarToggle"
    );

    toggleBtns.forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();

            if (window.innerWidth <= 992) {
                // Mobile slide
                sidebar.classList.toggle("show");
            } else {
                // Desktop collapse
                sidebar.classList.toggle("collapsed");
            }
        });
    });

});
</script>
