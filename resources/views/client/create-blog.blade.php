@extends('layouts.client.client-master')
@section('title', 'Creae blog')
@section('content')
<div class="container">
    <div class="breadcrumb">
        <span>Home</span>><b>Create blogs</b>
    </div>
    <div class="container-create">
        <div class="content-create">
            <h2>Create blog</h2>
            <form class="form-create" action="">
                <div class="form-group">
                    <label class="label" for="category">Category <span class="req">*</span></label>
                    <select name="category" id="">
                        <option value="">Category</option>
                        <option value="">Category1</option>
                        <option value="">Category12</option>
                    </select>
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <label class="label" for="title">Title<span class="req">*</span></label>
                    <input required type="text" id="title" name="title">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <input type="file" name="file" id="file" class="inputfile" />
                    <label for="file">Upload image</label>
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                    <img class="preview-image" width="269px" height="170px" src="./images/post-2.png" alt="">
                </div>
                <div class="form-group">
                    <label class="label" for="description">Description<span class="req">*</span></label>
                    <textarea name="content" id="description" placeholder="Description"></textarea>
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>

                <button class="btn-create-blog" type="submit">Create</button>
            </form>
        </div>
    </div>
</div>
</main>
@endsection
