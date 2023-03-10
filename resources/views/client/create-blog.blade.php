@extends('layouts.client.client-master')
@section('title', 'Creae blog')
@section('content')
<div class="container">
    <div class="breadcrumb">
        <span>{{ __('breadcrumb.home') }}</span>><b>{{ __('breadcrumb.create') }}</b>
    </div>
    <div class="container-create">
        <div class="content-create">
            <h2>{{ __('title.title.create') }}</h2>
            <form class="form-create" action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="label" for="category">{{ __('title-field.category') }} <span class="req">*</span></label>
                    <select name="category_id" id="">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="label" for="title">{{ __('title-field.title') }}<span class="req">*</span></label>
                    <input required type="text" id="title" name="title">
                    @error('title')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="file" name="thumb" id="file" class="inputfile" accept="image/*" onchange="loadFile(event)" />
                    <label for="file">{{ __('title-field.image') }}</label>
                    @error('thumb')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                    <img id="output" class="preview-image" width="269px" height="170px" src="" alt="">
                </div>
                <div class="form-group">
                    <label class="label" for="description">{{ __('title-field.description') }}<span class="req">*</span></label>
                    <input type="text" placeholder="Summary" name="summary">
                    @error('summary')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="label" for="description">{{ __('title-field.description') }}<span class="req">*</span></label>
                    <textarea name="content" id="description" placeholder="Description"></textarea>
                    <script>
                        CKEDITOR.replace('content');
                    </script>
                    @error('content')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn-create-blog" type="submit">{{ __('button.btn.create_form') }}</button>
            </form>
        </div>
    </div>
</div>
</main>
@endsection
