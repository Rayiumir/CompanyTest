<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(10);
        return view('post.index', compact('posts'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }
    public function store(PostCreateRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('posts/image', $imageName, 'public_files');
        }

        $data['img'] = $imageName;
        $data['user_id'] = auth()->user()->id;

        $post = Post::create($data);
        $post->categories()->attach($request->input('categories'));
        $post->addMetabox('metabox_field', $request->input('metabox_field'));

        return to_route('posts.index');
    }
    public function show(){}
    public function edit(Post $post, Category $category)
    {
        $categories = Category::with('parent')->paginate(5);
        $parent = Category::where('category_id', null)->where('id', '!=', $category->id)->get();
        return view('post.edit', compact('post', 'categories', 'parent', 'category'));
    }
    public function update(PostUpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('posts/image', $imageName, 'public_files');
        }

        $data['img'] = $imageName;

        $post ->update($data);
        $post->categories()->attach($request->input('categories'));
        $post->addMetabox('metabox_field', $request->input('metabox_field'));

        return to_route('posts.index');
    }
    public function destroy(){}
}
