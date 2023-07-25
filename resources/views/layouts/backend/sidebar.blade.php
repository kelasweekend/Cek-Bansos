<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Tools Admin</li>

        <li class="sidebar-item {{ request()->is('admin/penduduk') ? 'active' : '' }}">
            <a href="{{ route('admin.penduduk.index') }}" class='sidebar-link'>
                <i class="bi bi-people"></i>
                <span>List Penduduk</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('admin/penyaluran') ? 'active' : '' }}">
            <a href="{{ route('admin.penyaluran.index') }}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>Penyaluran Bansos</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('admin/blog*') ? 'active' : '' }}">
            <a href="{{ route('blog.index') }}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>Kelola Berita</span>
            </a>
        </li>

    </ul>
</div>
