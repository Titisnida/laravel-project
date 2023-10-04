<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code'=>'54321',
            'name'=>'milku',
            'price'=>3000
        ]);
        Product::create([
            'code'=>'fghij',
            'name'=>'Kanzler Singles Sosis Hot',
            'price'=>9000
        ]);
        Product::create([
            'code'=>'abcde',
            'name'=>'Oreo Chocolate Creme',
            'price'=>8500
        ]);
        Product::create([
            'code'=>'klmno',
            'name'=>'pocky',
            'price'=>8000
        ]);
        Product::create([
            'code'=>'pqrst',
            'name'=>'cadbury dairy milk',
            'price'=>10000
        ]);
    }
}
