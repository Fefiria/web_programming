<!--begin::Sidebar Brand-->
<div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="{{ route('home') }}" class="brand-link">
        <!--begin::Brand Image-->
        <img src="{{ url('assets/procom.png') }}" alt="Logo-Procom" class="brand-image opacity-100" />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Procom</span>
        <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
</div>
<!--end::Sidebar Brand-->
<!--begin::Sidebar Wrapper-->
<div class="sidebar-wrapper">
    <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
            aria-label="Main navigation" data-accordion="false" id="navigation">

            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    <i class="nav-icon bi bi-calendar"></i>
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link">
                    <i class="nav-icon bi bi-bank"></i>
                    <p>Contact</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('division') }}" class="nav-link">
                    <i class="nav-icon bi bi-building"></i>
                    <p>Division</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('department') }}" class="nav-link">
                    <i class="nav-icon bi bi-building"></i>
                    <p>Department</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('gallery') }}" class="nav-link">
                    <i class="nav-icon bi bi-people"></i>
                    <p>Gallery</p>
                </a>
            </li>
        </ul>
        <!--end::Sidebar Menu-->
    </nav>
</div>
<!--end::Sidebar Wrapper-->
