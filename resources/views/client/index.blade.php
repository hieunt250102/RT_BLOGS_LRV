<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | {{ __('index.title') }}</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="container">
                    <div class="nav">
                        <div class="nav__logo">
                            <div class="nav__logo--group">
                                <a href="{{route('blogs.index')}}"><img src="{{asset('images/logo.png')}}" alt="" class="logo__image" /></a>
                                <a href="{{route('blogs.index')}}" class="logo__name">RT-Blogs</a>
                            </div>
                            <div class="nav__search">
                                <input type="text" placeholder="{{ __('header-client.placeholder-search') }}" />
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
                                <a href="{{route('blogs.make')}}" class="nav__option--btn-create">{{ __('button.btn.create') }}</a>
                            </div>
                            <div class="nav__option--user dropdown">
                                <!-- <div class="dropdown-content">
                            <a href="#">{{ __('button.btn.logout') }}</a>
                            <a href="#">{{ __('button.btn.myblogs') }}</a>
                        </div>
                        <p class="nav__option--user-name">My name</p> -->
                                <a href="{{route('sign-in')}}" class="nav__option--user-name">{{ __('button.btn.signin') }}</a>
                                <a href="{{route('sign-up')}}" class="nav__option--user-name">{{ __('button.btn.signup') }}</a>
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
        <div class="banner"></div>
        <main>
            <div class="container content">
                <div class="content__header">
                    <div class="content__header--title">
                        <h1>{{ __('title.title.homepage') }}</h1>
                    </div>
                    <select class="content__header--filter">
                        <option value="">Category</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="content__grid">
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__grid--post">
                        <a href="{{route('blogs.detail',['param'=>1])}}"><img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" /></a>
                        <div class="post__content">
                            <div class="post__content--infor">
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="{1.5}" stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">Jimmy Nguyen</p>
                                </div>
                                <div class="post__content--group">
                                    <div class="post__content--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="post__content--author">3 mins ago</p>
                                </div>
                            </div>
                            <a href="{{route('blogs.detail',['param'=>1])}}">
                                <h4 class="post__content--title">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </h4>
                            </a>
                            <p class="post__content--summary">
                                Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                                hulanjfh bfueodap fiefhief...
                            </p>
                            <div class="post__content--footer">
                                <a href="{{route('blogs.detail',['param'=>1])}}"><button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#" class="pagination__btn--previous" title="previous page"><i class="fa-solid fa-angle-left"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#" class="page-active">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#" class="pagination__btn--next" title="next page"><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
        </main>
        <footer>
            <p class="footer-paragraph">Copyright 2022. {{ __('footer-client.made-by') }} Regit JSC</p>
        </footer>
    </div>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
