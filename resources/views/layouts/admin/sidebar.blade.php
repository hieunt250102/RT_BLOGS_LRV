<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index')}}">
                <i class="fa-solid fa-gauge menu-icon"></i>
                <span class="menu-title">{{ __('sidebar-admin.dashboard') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.blogs.index')}}">
                <i class="fa-solid fa-newspaper menu-icon"></i>
                <span class="menu-title">{{ __('sidebar-admin.posts') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index')}}">
                <i class="fa-solid fa-users menu-icon"></i>
                <span class="menu-title">{{ __('sidebar-admin.users') }}</span>
            </a>
        </li>
    </ul>
</nav>

