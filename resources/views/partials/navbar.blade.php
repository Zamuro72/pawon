<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fas fa-pepper-hot"></i> Pawon</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
            <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('menu') }}" class="nav-item nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ in_array(request()->route()->getName(), ['booking', 'team', 'testimonial']) ? 'active' : '' }}" data-bs-toggle="dropdown">Halaman</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('booking') }}" class="dropdown-item {{ request()->routeIs('booking') ? 'active' : '' }}">Booking</a>
                    <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Tim Kami</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimoni</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
        </div>
        <a href="{{ route('booking') }}" class="btn btn-primary py-2 px-4">Booking Meja</a>
    </div>
</nav>
