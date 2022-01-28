<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {

    for ($i = 0; $i < 20; $i++) {
      # code...
      $prod = new Product();
      $prod->name = $faker->sentence();
      $prod->desc = $faker->paragraph(2, true);
      $prod->image = $faker->imageUrl(200, 200, 'product', true);
      $prod->price = $faker->randomFloat(2, 1000, 2000);
      $prod->save();
    }
  }
}
