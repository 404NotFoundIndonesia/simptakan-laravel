
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle"><i class="hamburger align-self-center"></i></a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ auth()->user()->avatar_url }}" class="avatar img-fluid rounded me-1" alt="{{ auth()->user()->name }}" /> <span class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#" id="logout-button">Keluar</a>
                    <form action="{{ route('auth.sign-out') }}" method="post" id="logout-form">@csrf</form>
                </div>
            </li>
        </ul>
    </div>
</nav>

@push('script')
    <script>
        const logoutButton = document.getElementById('logout-button');
        if (logoutButton) {
            const signOutForm = document.getElementById('logout-form');
            logoutButton.addEventListener('click', function(e) {
                signOutForm.submit();
            });
        }
    </script>
@endpush
