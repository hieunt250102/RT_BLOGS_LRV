@extends('layouts.client.client-master')
@section('title', 'Creae blog')
@section('content')
<div class="container">
    <div class="breadcrumb">
        <span>{{ trans('breadcrumb.home') }}</span>><b>{{ trans('breadcrumb.create') }}</b>
    </div>
    <div class="container-create">
        <div class="content-create">
            <h2>{{ trans('create.title') }}</h2>
            <form class="form-create" action="">
                <div class="form-group">
                    <label class="label" for="category">{{ trans('create.title-field.category') }} <span class="req">*</span></label>
                    <select name="category" id="">
                        <option value="">Category</option>
                        <option value="">Category1</option>
                        <option value="">Category12</option>
                    </select>
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <label class="label" for="title">{{ trans('create.title-field.title') }}<span class="req">*</span></label>
                    <input required type="text" id="title" name="title">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <input type="file" name="file" id="file" class="inputfile" />
                    <label for="file">{{ trans('create.title-field.image') }}</label>
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                    <img class="preview-image" width="269px" height="170px" src="./images/post-2.png" alt="">
                </div>
                <div class="form-group">
                    <label class="label" for="description">{{ trans('create.title-field.description') }}<span class="req">*</span></label>
                    <textarea name="content" id="description" placeholder="Description"></textarea>
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>

                <button class="btn-create-blog" type="submit">{{ trans('create.btn-create') }}</button>
            </form>
        </div>
    </div>
</div>
</main>
@endsection
