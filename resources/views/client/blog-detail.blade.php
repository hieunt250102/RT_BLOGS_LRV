@extends('layouts.client.client-master')
@section('title', 'Blog detail')
@section('content')
<div class="container">
    <div class="container-detail">
        <div class="content-detail">
            <div class="breadcrumb">
                <span>{{ trans('breadcrumb.home') }}</span> > <b>{{ trans('breadcrumb.detail') }}</b>
            </div>
            <h2 class="title-blog">My cat is like the boss</h2>
            <div class="infor-blog">
                <div class="infor-author">
                    <div class="avatar">
                        <img src="{{asset('/images/post-1.png')}}" alt="">
                    </div>
                    <div class="name_time">
                        <span>My name</span>
                        <span>05/09/2022</span>
                    </div>
                </div>
                <div class="author-option">
                    <!-- <button class="blog-status-not-approved">Not approved</button> -->
                    <button class="blog-status-approved">Approved</button>
                    <button class="btn-delete" id="myBtn">{{ trans('detail.btn-delete') }}</button>
                </div>
            </div>

            <div class="main-content">
                <img class="thumb-blog" src="{{asset('/images/post-2.png')}}" alt="">
                <p>Because she is. At least in her mind. Cats are affectionately narcissistic in a very
                    subtle. It's like somehow they just know that in ancient Egypt they were once worshipped
                    as Gods and that is their self image that's natural to them. This is only my opinion
                    based on the cats that I have lived with.</p>
            </div>

            <div class="related-blog">
                <h2 class="title-related-blog">{{ trans('detail.related-title') }}</h2>
                <div class="list-related-blog">
                    <div class="related-blog-item">
                        <a href="/blog/1"><img src="{{asset('/images/post-1.png')}}" alt=""></a>
                        <a href="/blog/1">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                    <div class="related-blog-item">
                        <a href="/blog/1"><img src="{{asset('/images/post-1.png')}}" alt=""></a>
                        <a href="/blog/1">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                    <div class="related-blog-item">
                        <a href="/blog/1"><img src="{{asset('/images/post-1.png')}}" alt=""></a>
                        <a href="/blog/1">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                    <div class="related-blog-item">
                        <a href="/blog/1"><img src="{{asset('/images/post-1.png')}}" alt=""></a>
                        <a href="/blog/1">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="comments">
                <h2 class="title-comment">{{ trans('detail.comment-title') }}</h2>
                <div class="user-comment">
                    <img src="{{asset('/images/post-1.png')}}" alt="">
                    <textarea name="comment" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="list-comment">
                    <div class="comment-item">
                        <div>
                            <img src="{{asset('/images/post-1.png')}}" alt="">
                        </div>
                        <div class="content-comment">
                            <p>YourName</p>
                            <p>Yes, it’s right</p>
                            <p>30 phút trước </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">×</span>
            <h2>{{ trans('detail.btn-delete-modal') }}</h2>
        </div>
        <div class="modal-body">
            <p>{{ trans('detail.modal-content') }}</p>
        </div>
        <div class="modal-footer">
            <button id="btn-cancel">{{ trans('detail.btn-cancel-modal') }}</button>
            <button class="btn-de">{{ trans('detail.btn-delete-modal') }}</button>
        </div>
    </div>

</div>
@endsection
