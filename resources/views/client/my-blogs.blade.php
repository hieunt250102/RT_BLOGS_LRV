@extends('layouts.client.client-master')
@section('title', 'My blogs')
@section('content')
<div class="container content">
    <div class="content__header">
        <div class="content__header--title">
            <h1>{{ __('title.title.my_blogs') }}</h1>
        </div>
    </div>
    <table id="table-my-blogs" style="text-align: center;" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Status</th>
                <th colspan="2">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td># {{$blog->id}}</td>
                <td>
                    <img width="100px" class="thumb-blog" src="{{asset('images/' . $blog->thumb)}}" alt="">
                </td>
                <td>{{$blog->title}}</td>
                <td>
                    @if($blog->status == App\Models\Blog::STATUS_APPROVED)
                    <button class="blog-status-approved">Approved</button>
                    @elseif($blog->status == App\Models\Blog::STATUS_NOT_APPROVED)
                    <button class="blog-status-not-approved">Not approved</button>
                    @else
                    <button class="blog-status-pending">Pending</button>
                    @endif
                </td>
                <td>
                    <a href="{{route('blogs.edit',$blog->id)}}"><button class="blog-status-pending">Edit</button></a>
                    <a href="{{route('blogs.edit',$blog->id)}}"><button class="btn-delete">Delete</button></a>  
                </td>
            </tr>
            @endforeach
            <tr></tr>
        </tbody>
    </table>
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
