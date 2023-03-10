@extends('layouts.client.client-master')
@section('title', 'Blog detail')
@section('content')
<div class="container">
    <div class="container-detail">
        <div class="content-detail">
            <div class="breadcrumb">
                <span>{{ __('breadcrumb.home') }}</span> > <b>{{ __('breadcrumb.detail') }}</b>
            </div>
            <h2 class="title-blog">{{$blog->title}}</h2>
            <div class="infor-blog">
                <div class="infor-author">
                    <div class="avatar">
                        <img src="{{asset('/images/'. Auth::user()->avatar)}}" alt="">
                    </div>
                    <div class="name_time">
                        <span>{{$blog->user->name}}</span>
                        <span>05/09/2022</span>
                    </div>
                </div>
                <div class="author-option">
                    @if($blog->status == App\Models\Blog::STATUS_APPROVED)
                    <button class="blog-status-approved">Approved</button>
                    @elseif($blog->status == App\Models\Blog::STATUS_NOT_APPROVED)
                    <button class="blog-status-not-approved">Not approved</button>
                    @else
                    <button class="blog-status-pending">Pending</button>
                    @endif
                    <button class="btn-delete" id="myBtn">{{ __('button.btn.delete.delete_nor') }}</button>
                </div>
            </div>

            <div class="main-content">
                <img class="thumb-blog" src="{{asset('images/' . $blog->thumb)}}" alt="">
                <p>{!! html_entity_decode($blog->content) !!}</p>
            </div>

            <div class="related-blog">
                <h2 class="title-related-blog">{{ __('title.title.related') }}</h2>
                <div class="list-related-blog">
                    <div class="related-blog-item">
                        <a href="{{ route('blogs.show',$blog->id) }}"><img src="{{asset('/images/'. $blog->thumb)}}" alt=""></a>
                        <a href="{{ route('blogs.show',$blog->id) }}">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                    <div class="related-blog-item">
                        <a href="{{ route('blogs.show',$blog->id) }}"><img src="{{asset('/images/'. $blog->thumb)}}" alt=""></a>
                        <a href="{{ route('blogs.show',$blog->id) }}">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                    <div class="related-blog-item">
                        <a href="{{ route('blogs.show',$blog->id) }}"><img src="{{asset('/images/'. $blog->thumb)}}" alt=""></a>
                        <a href="{{ route('blogs.show',$blog->id) }}">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                    <div class="related-blog-item">
                        <a href="{{ route('blogs.show',$blog->id) }}"><img src="{{asset('/images/'. $blog->thumb)}}" alt=""></a>
                        <a href="{{ route('blogs.show',$blog->id) }}">
                            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="comments">
                <h2 class="title-comment">{{ __('title.title.comment') }}</h2>
                <div class="user-comment">
                    <img src="{{asset('/images/'. $blog->thumb)}}" alt="">
                    <textarea name="comment" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="list-comment">
                    <div class="comment-item">
                        <div>
                            <img src="{{asset('/images/'. $blog->thumb)}}" alt="">
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
            <h2>{{ __('button.btn.delete.delete_form') }}</h2>
        </div>
        <div class="modal-body">
            <p>{{ __('title.title.modal_content') }}</p>
        </div>
        <div class="modal-footer">
            <button id="btn-cancel">{{ __('button.btn.cancel') }}</button>
            <button class="btn-de">{{ __('button.btn.delete.delete_form') }}</button>
        </div>
    </div>

</div>
@endsection
