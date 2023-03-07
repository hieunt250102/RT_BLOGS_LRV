@extends('layouts.client.client-master')
@section('title', 'My blogs')
@section('content')
<div class="container content">
    <div class="content__header">
        <div class="content__header--title">
            <h1>{{ __('title.title.my_blogs') }}</h1>
        </div>
        <select class="content__header--filter">
            <option value="">Category</option>
            <option value="">Option</option>
            <option value="">Option</option>
        </select>
    </div>
    <div class="content__grid">
        <div class="content__grid--post">
            <img src="{{asset('images/post-1.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-2.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-3.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-4.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-5.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-6.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-7.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-8.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="content__grid--post">
            <img src="{{asset('images/post-9.png')}}" alt="" class="post__thumb" />
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
                <h4 class="post__content--title">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h4>
                <p class="post__content--summary">
                    Lorem ipsum dolor sit amet, consectetur ipsum linum amataki
                    hulanjfh bfueodap fiefhief...
                </p>
                <div class="post__content--footer">
                    <button class="post__content--btn">{{ __('button.btn.read_more') }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 card-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg></button>
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
@endsection
