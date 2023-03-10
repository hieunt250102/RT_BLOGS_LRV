<?php

namespace App\Interfaces;

interface BlogServiceInterface
{
    public function getAll();
    
    public function getMyBlogs($user_id);

    public function createBlog($request);

    public function updateBlog($id, $request);

    public function findBlogWithConditions($column, $operator = null, $value = null);

    public function findBlogsWithConditions($column, $operator = null, $value = null);

    public function revertSlug($slug);

}
