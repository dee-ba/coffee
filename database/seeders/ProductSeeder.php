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
        Product::create([
            'name' => 'Mochaccino',
            'description' => 'Blended with milk and ice, layered on top of whipped cream and chocolate cookie crumble and topped with vanilla whipped cream, mocha drizzle and even more chocolate cookie crumble. Each sip is as good as the last . . . all the way to the end.',
            'image' => 'https://unsplash.com/photos/qdDQ6V7lV9Y',
            'price' => 3.99,
            'category' => "cold",
            'stock' => random_int(50,100)
        ]);

        Product::create([
            'name' => 'Iced Mocha',
            'description' => 'The next big thing in coffee, our Colombian roast is slow brewed cold to give you the smoothest, most refreshing Iced Coffee.Add your milk of choice for a creamier taste and Vanilla for a more indulgent experience.',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 4.99,
            'category' => "cold",
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
            'name' => 'Iced Latte',
            'description' => 'The perfect combination of our aromatic Espresso and creamy steamed milk that just makes any day special.',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 2.99,
            'category' => "cold",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Americano',
            'description' => 'Our famously intense Espresso softened with water. Drink it straight up or add a splash of milk. You’ll love it either way.',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 2.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Macchiato',
            'description' => 'A single shot of Espresso with just a dash of steamed milk. Simple and strong, with a smooth finish.',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 3.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Cappaccino',
            'description' => 'Our aromatic Espresso, expertly blended with steamed, frothy milk.',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 3.99,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);
        Product::create([
            'name' => 'Mochaccino',
            'description' => 'Blended with milk and ice, layered on top of whipped cream and chocolate cookie crumble and topped with vanilla whipped cream, mocha drizzle and even more chocolate cookie crumble. Each sip is as good as the last . . . all the way to the end.',
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'price' => 3.50,
            'category' => "hot",
            'stock' => random_int(50,100)
        ]);
    }
}

