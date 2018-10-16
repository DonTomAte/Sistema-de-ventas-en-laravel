<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Operation;
use App\Product;
use App\Provider;
use App\User;
use App\Warehouse;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$categories = 
    	factory(User::class,5)->create();
        factory(Category::class,3)->create();
        factory(Warehouse::class,3)->create();
        factory(Provider::class,5)->create();
        factory(Product::class,15)->create();
        factory(Operation::class,10)->create();
	
    }
}
