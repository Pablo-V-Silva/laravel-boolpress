<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

use function GuzzleHttp\Promise\all;

class TagSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tags = ['html', 'css', 'js', 'laravel', 'php', 'skate'];

    foreach ($tags as $tag) {
      # code...
      $_tag = new Tag();
      $_tag->tag = $tag;
      $_tag->save();
    }
  }
}
