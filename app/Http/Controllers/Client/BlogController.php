<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Interfaces\BlogServiceInterface;
use App\Interfaces\CategoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    private $blogService, $categoyService;
    public function __construct(BlogServiceInterface $blogService, CategoryServiceInterface $categoyService)
    {
        $this->blogService = $blogService;
        $this->categoyService = $categoyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoyService->getAll();
        $blogs = $this->blogService->getAll();
        return view('client.index', compact('categories', 'blogs'));
    }
    /**
     * Display a listing of your blogs.
     */
    public function myBlogs()
    {
        $categories = $this->categoyService->getAll();
        $blogs = $this->blogService->getMyBlogs(Auth::id());
        return view('client.my-blogs', compact('categories', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoyService->getAll();
        return view('client.create-blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $this->blogService->createBlog($request);
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $slug = $this->blogService->revertSlug($request->slug);
        $blog = $this->blogService->findBlogWithConditions('slug', '=', $slug);
        return view('client.blog-detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = $this->categoyService->getAll();
        $blog = $this->blogService->findBlogWithConditions('id', '=', $id);
        return view('client.edit-blog', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        dd($request->all());
        $this->blogService->updateBlog($id, $request);
        return redirect()->route('blogs.me');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
