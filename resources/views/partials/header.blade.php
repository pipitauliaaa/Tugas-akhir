<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase tracking-wider" href="/">⚡ VORTEX AGENCY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active fw-bold text-primary' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('layanan*') ? 'active fw-bold text-primary' : '' }}" href="/layanan">Layanan Digital</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('tim*') ? 'active fw-bold text-primary' : '' }}" href="/tim">Tim Kreatif</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('kontak*') ? 'active fw-bold text-primary' : '' }}" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
