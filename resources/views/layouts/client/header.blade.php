<header class="header">
    <div class="header__container">
        <div class="container">
            <div class="nav">
                <div class="nav__logo">
                    <div class="nav__logo--group">
                        <a href="/"><img src="{{asset('images/logo.png')}}" alt="" class="logo__image" /></a>
                        <a href="/" class="logo__name">RT-Blogs</a>
                    </div>
                    <div class="nav__search">
                        <input type="text" placeholder="Search blog" />
                        <div class="nav__search--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="nav__option">
                    <div class="nav__option--btn">
                        <a href="#" class="nav__option--btn-top">Top</a>
                        <a href="/create" class="nav__option--btn-create">Create Blog</a>
                    </div>
                    <div class="nav__option--user dropdown">
                        <!-- <div class="dropdown-content">
                            <a href="#">Logout</a>
                            <a href="#">My blogs</a>
                        </div>
                        <p class="nav__option--user-name">My name</p> -->
                        <a href="/sign-in" class="nav__option--user-name">Sign in</a>
                        <a href="/sign-up" class="nav__option--user-name">Sign up</a>
                        <!-- <div class="nav__option--user-avatar ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="header-menu-nav">
            <div class="header-menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div class="header-menu-logoicon">
                <div class="header-menu-logo">
                    <img src="{{asset('images/logo.png')}}" alt="header-logo" class="header-menu-imageicon" />
                </div>
                <p class="header-logo-namemenu">RT-Blogs</p>
            </div>
            <div class="header-menu-search">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

            </div>
        </div>
    </div>
</header>
