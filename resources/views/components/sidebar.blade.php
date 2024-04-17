
<nav id="sidebar" class="sidebar collapsedi js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" style="font-weight: 300 !important" href="{{ route('dashboard') }}">
            <span class="align-middle"><b style="font-weight: 800 !important">SIMP</b>TAKAN</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu Utama
            </li>

            <li class="sidebar-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dasbor</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('book.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('book.index') }}">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Katalog</span>
                </a>
            </li>

        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">404 Not Found Indonesia</strong>
                <div class="mb-3 text-sm">Want to see more open source project?</div>
                <div class="d-grid">
                    <a href="https://github.com/404NotFoundIndonesia/" target="_blank" class="btn btn-primary">Go to GitHub</a>
                </div>
            </div>
        </div>
    </div>
</nav>
