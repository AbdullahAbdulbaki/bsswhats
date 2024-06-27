<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Languages;

class BackendBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view ('Blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::pluck('name', 'id')->all();
        $languages= Languages::pluck('fullname', 'id')->all();
        return view('Blog.create', compact('categories','languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'lang' => 'required|string',
            'img' => 'required|image|max:2048', // Assuming it's an image file, and max 2MB
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('landing/blogs_super_admin/'), $imageName);
        } else {
            $imageName = "";
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->lang = $request->lang;
        $blog->img = $imageName;
        $blog->save();

        return redirect()->route('blog_backend.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   $blog = Blog::findOrFail($id);
        $categories = BlogCategory::pluck('name', 'id')->all();
        $languages= Languages::pluck('fullname', 'id')->all();
        return view('Blog.edit', compact('categories','languages','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $request->validate([
        'title' => 'required|string',
        'category_id' => 'required|integer',
        'short_description' => 'required|string',
        'long_description' => 'required|string',
        'lang' => 'required|string',
    ]);


    $blog = Blog::findOrFail($id);


    $blog->title = $request->title;
    $blog->category_id = $request->category_id;
    $blog->short_description = $request->short_description;
    $blog->long_description = $request->long_description;
    $blog->lang = $request->lang;


    if ($request->hasFile('img') && $request->file('img')->isValid()) {
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('landing/blogs_super_admin/'), $imageName);
        $blog->img = $imageName;
    }


    $blog->save();


    return redirect()->route('blog_backend.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog_backend.index')->with('success', 'Blog  deleted successfully.');
    }
}
