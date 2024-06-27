<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_categories = BlogCategory::all();
        return view('Blog_category.index',compact('blog_categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blog_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        BlogCategory::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('blog_categories.index')->with('success', 'Blog category created successfully.');

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
    {
        $category = BlogCategory::findOrFail($id);

        return view('Blog_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = BlogCategory::findOrFail($id);

        $category->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('blog_categories.index')->with('success', 'Blog category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('blog_categories.index')->with('success', 'Blog category deleted successfully.');
    }
}
