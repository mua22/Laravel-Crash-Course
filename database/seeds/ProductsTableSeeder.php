<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 50)->create();
        for($i=1;$i<50;$i++){
            $product = new \App\Product();
            $product->name = 'Lenovo Laptop: '.$i;
            $product->description = $i.'Lenovo Laptop is my brand new laptop';
            $product->save();
        }
    }
}
