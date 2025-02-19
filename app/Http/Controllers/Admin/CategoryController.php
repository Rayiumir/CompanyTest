<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->paginate(5);
        $parent = Category::where('category_id', null)->get();
        return view('category.index', compact('categories', 'parent'));
    }

    public function create(){}
    public function edit(Category $category)
    {
        $categories = Category::with('parent')->paginate(5);
        $parent = Category::where('category_id', null)->where('id', '!=', $category->id)->get();
        return view('category.edit', compact( 'category', 'categories', 'parent'));
    }
    public function store(CategoryCreateRequest $request)
    {
        Category::create($request->validated());
        return back();
    }
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->validated());
        return back();
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
