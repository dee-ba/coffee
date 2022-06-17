<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



use Faker\Factory as Faker;
use Ramsey\Uuid\Type\Decimal;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 

       public function run()
    {
        $faker = Faker::create();
        DB::table('products')->insert([
            'name' => 'Mocha',
            'description' => 'The classic iced coffee drink rich, full-bodied espresso combined with milk and ice, then topped with whipped cream.',
            'image' => 'https://images.unsplash.com/photo-1589396575653-c09c794ff6a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'price' => 4.99,
            'category' => "cold",
            'stock' => random_int(50,100),
            'created_at' => date('y-m-d h:m:s'),	
		    'updated_at' => date('y-m-d h:m:s')	
        ]);

        Product::create([
            'name' => 'Espresso Macchiato',
            'description' => 'Steamed milk and foam, with just about half a shot of espresso. This beverage is excellent for coffee lovers who love the espresso flavour!',

            'image' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'price' => 2.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Cappaccino',
            'description' => 'Espresso, expertly blended with steamed, frothy milk. We love a creamy cappuccino topped with a sprinkling of cocoa powder',
            'image' => 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'price' => 3.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Mochaccino',
            'description' => 'Hybrid between a mocha and a cappuccino made with chocolate sauce. Perfect for the chocoholic who likes a foamy mocha!',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 3.50,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);

        Product::create([
            'name' => 'Iced Coffee',
            'description' => 'The next big thing in coffee, our Colombian roast is slow brewed cold to give you the smoothest, most refreshing Iced Coffee.Add your milk of choice for a creamier taste and Vanilla for a more indulgent experience.',
            'image' => 'https://images.unsplash.com/photo-1592663527359-cf6642f54cff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=419&q=80',
            'price' => 4.99,
            'category' => "cold",
            'stock' => random_int(50,100)
        ]);

        Product::create([
            'name' => 'Americano',
            'description' => 'Our famously intense Espresso softened with water. Drink it straight up or add a splash of milk. You’ll love it either way.',
            'image' =>   'https://images.unsplash.com/photo-1580661869408-55ab23f2ca6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1935&q=80',
            'price' => 2.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);

        Product::create([
            'name' => '"Frappe-licious"',
            'description' => 'A creamy indulgent drink with a taste of Vanilla, served over crushed ice!',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 3.99,
            'category' => "cold",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Latte',
            'description' => 'The perfect combination of our aromatic Espresso and creamy steamed milk that just makes any day special.',
            'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1337&q=80',
            'price' => 2.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);

    }
}


