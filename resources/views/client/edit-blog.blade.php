@extends('layouts.client.client-master')
@section('title', 'Edit blog')
@section('content')
<div class="container">
    <div class="breadcrumb">
        <span>{{ __('breadcrumb.home') }}</span>><b>{{ __('breadcrumb.edit') }}</b>
    </div>
    <div class="container-create">
        <div class="content-create">
            <h2>{{ __('title.title.edit') }}</h2>
            <form class="form-create" action="{{route('blogs.update', $blog->id)}}" method="PUT" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="label" for="category">{{ __('title-field.category') }} <span class="req">*</span></label>
                    <select name="category_id" id="">
                        @foreach ($categories as $category)
                        <option <?php echo ($blog->category_id == $category->id) ? 'selected' : '' ?> value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="label" for="title">{{ __('title-field.title') }}<span class="req">*</span></label>
                    <input required type="text" id="title" name="title" value="{{$blog->title}}">
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
                    <img id="output" class="preview-image" width="269px" height="170px" src="{{asset('images/' . $blog->thumb)}}" alt="">
                </div>
                <div class="form-group">
                    <label class="label" for="description">{{ __('title-field.description') }}<span class="req">*</span></label>
                    <input type="text" placeholder="Summary" name="summary" value="{{$blog->summary}}">
                    @error('summary')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="label" for="description">{{ __('title-field.description') }}<span class="req">*</span></label>
                    <textarea name="content" id="description" placeholder="Description">{{$blog->content}}"</textarea>
                    <script>
                        CKEDITOR.replace('content');
                    </script>
                    @error('content')
                    <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <p>Select blog status:</p>
                        <input type="radio" <?php echo ($blog->status == App\Models\Blog::STATUS_NOT_APPROVED) ? 'checked' : '' ?> name="status" value="{{App\Models\Blog::STATUS_NOT_APPROVED}}">
                        <label for="html">Not approved</label><br>
                        <input type="radio" <?php echo ($blog->status == App\Models\Blog::STATUS_PENDING) ? 'checked' : '' ?> name="status" value="{{App\Models\Blog::STATUS_PENDING}}">
                        <label for="css">Pending</label><br>
                </div>
                <button class="btn-create-blog" type="submit">{{ __('button.btn.edit_form') }}</button>
            </form>
        </div>
    </div>
</div>
</main>
@endsection
