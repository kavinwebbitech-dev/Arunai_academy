<style>

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-custom mb-3">
    <div class="container-fluid">
        {{-- <button class="btn btn-light d-lg-none" id="mobileSidebarToggle">
            ☰
        </button> --}}
        <!-- LEFT -->
        <div class="d-flex align-items-center gap-2">
            <button class="sidebar-toggle-btn d-lg-none" id="toggleSidebar">☰</button>

            <div class="brand">
                Arunai Academy
            </div>
        </div>

        <!-- RIGHT -->
        <ul class="navbar-nav ms-auto align-items-center gap-2">
            <li class="nav-item w-100 w-lg-auto">
                <div class="nav-pill">
                     <i class="fa fa-user"></i><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Signout</a>
                </div>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </ul>
    </div>
</nav>
