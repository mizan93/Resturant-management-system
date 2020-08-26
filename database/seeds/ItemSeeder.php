<?php

use App\Category;
use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=factory(Category::class,5)->create();
        $category->each(function($category){
            factory(Item::class,3)->create([
                'category_id'=>$category->id,
            ]);
        });
    }
}
