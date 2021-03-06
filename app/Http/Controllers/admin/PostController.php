<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    return view('admin.posts.index', ['posts' => Post::all()->sortDesc()]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    $categories = Category::all();
    $tags = Tag::all();
    return view('admin.posts.create', compact('categories', 'tags'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //ddd($request->all());

    $validateData = $request->validate([
      'accountName' => 'required',
      'text' => 'nullable',
      'image' => 'nullable',
      'category_id' => 'nullable|exists:categories,id',
    ]);


    $validateData['slug'] = Str::slug($validateData['accountName']);

    $validateData['user_id'] = Auth::id();

    $post = Post::create($validateData);

    if ($request->has('tags')) {
      # code...
      $request->validate(
        [
          'tags' => ['nullable', 'exists:tags,id']
        ]
      );
      $post->tags()->attach($request->tags);
    }
    ddd($validateData);
    return redirect()->route('admin.posts.index')->with('message', 'You Created your Prod, GG BROO :D');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    //
  }
}
