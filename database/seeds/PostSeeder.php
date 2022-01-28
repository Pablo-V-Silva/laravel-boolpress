<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    //
    for ($i = 0; $i < 20; $i++) {
      # code...
      $post = new Post();
      $post->accountName = $faker->word();
      $post->text = $faker->paragraph(2, true);
      $post->image = $faker->imageUrl(200, 200);
      $post->save();
    }
  }
}
