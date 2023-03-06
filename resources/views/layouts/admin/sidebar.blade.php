<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin/">
                <i class="fa-solid fa-gauge menu-icon"></i>
                <span class="menu-title">{{ trans('sidebar-admin.dashboard') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/posts">
                <i class="fa-solid fa-newspaper menu-icon"></i>
                <span class="menu-title">{{ trans('sidebar-admin.posts') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/users">
                <i class="fa-solid fa-users menu-icon"></i>
                <span class="menu-title">{{ trans('sidebar-admin.users') }}</span>
            </a>
        </li>
    </ul>
</nav>
