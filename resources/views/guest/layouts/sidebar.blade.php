<!--begin::Sidebar Brand-->
<div class="sidebar-brand">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ url('assets/procom.png') }}" alt="Logo-Procom" class="brand-image opacity-100" />

        <span class="brand-text fw-light">Procom</span>
    </a>
</div>

<!--begin::Sidebar Wrapper-->
<div class="sidebar-wrapper">
    <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
            aria-label="Main navigation" data-accordion="false" id="navigation">

            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>Home</p>
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
                <a href="{{ route('galleries.index') }}" class="nav-link">
                    <i class="nav-icon bi bi-people"></i>
                    <p>Gallery</p>
                </a>
            </li>

        </ul>
    </nav>
</div>
<!--end::Sidebar Wrapper-->
```
