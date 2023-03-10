<?php

namespace App\Services;

use App\Interfaces\BlogServiceInterface;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogService implements BlogServiceInterface
{

    public function getAll()
    {
        return Blog::select('id', 'title', 'user_id', 'content', 'summary', 'status', 'created_at', 'slug')
            ->where('status', Blog::STATUS_APPROVED)
            ->orderByDesc('updated_at', 'DESC')
            ->paginate(5);
    }

    public function getMyBlogs($user_id)
    {
        return $this->findBlogsWithConditions('user_id', '=', $user_id);
    }

    public function createBlog($request)
    {
        $image = $request['thumb'];
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        return Blog::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'category_id' => $request['category_id'],
            'summary' => $request['summary'],
            'slug' => Str::slug($request['title'], '-'),
            'thumb' => $imageName,
            'user_id' => Auth::id(),
            'status' => Blog::STATUS_PENDING,
        ]);
    }


    public function findBlogWithConditions($column, $operator = null, $value = null)
    {
        return  Blog::where($column, $operator, $value)->first();
    }

    public function findBlogsWithConditions($column, $operator = null, $value = null)
    {
        return  Blog::where($column, $operator, $value)->get();
    }

    public function updateBlog($id, $request)
    {
        $blog = $this->findBlogWithConditions('id', $id);
        if ($blog) {
            $blog->update($request);
            return $blog;
        }

        return false;
    }

    public function deleteBlog($id)
    {
        $blog = $this->findBlogWithConditions('id', $id);

        if ($blog) {
            $blog->delete();
            return true;
        }

        return false;
    }

    public function revertSlug($slug)
    {
        return Str::of($slug)->replace('-', ' ')->title();
    }
}
