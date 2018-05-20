<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\CategoryProduct;
use App\Model\Category;
use App\Model\Product;
use App\Model\Like;
use App\Model\Question;
use App\Model\Reply;
use App\Model\UnitProduct;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(CategoryProduct::class, 10)->create();
        factory(UnitProduct::class, 10)->create();
        factory(Product::class, 100)->create();


        factory(Category::class, 5)->create();
        factory(Question::class, 10)->create();
        factory(Reply::class,50)->create()->each(function ($reply){
            return $reply->like()->save(factory(like::class)->make());
        });

    }
}
