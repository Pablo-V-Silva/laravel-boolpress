<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products = Product::orderByDesc('id')->paginate(5);
    $posts = Post::orderByDesc('id')->paginate(5);
    return view('guest.index', compact('products', 'posts'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($type, $id)
  {
    /* dd($id, $type); */
    if ($type === 'post') {
      $post = Post::find($id);
      return view('guest.posts.show', compact('post'));
    } elseif ($type === 'product') {
      $product = Product::find($id);
      return view('guest.products.show', compact('product'));
    }
  }
}
