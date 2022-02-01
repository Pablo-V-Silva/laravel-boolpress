<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Post extends Model
{
  protected $fillable = ['accountName', 'text', 'image', 'slug', 'category_id', 'user_id'];

  public function category(): BelongsTo
  {

    return $this->belongsTo(Category::class);
  }

  public function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class);
  }

  public function user(): BelongsToMany
  {
    # code...
    return $this->belongsToMany(User::class);
  }
}
