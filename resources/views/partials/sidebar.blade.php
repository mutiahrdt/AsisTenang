<!-- Sidebar content here -->
<a href="{{ url('/') }}" class="brand-link">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>
<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/pekerja') }}" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>Data Pekerja</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/order-request') }}" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Permintaan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
