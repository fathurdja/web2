<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Book::factory()->count(10)->create();
    //    Produk::factory()->create([
    //         'name' => 'Pempek',
    //         'price' => 20000,
    //         'category'=>'makanan'
    //     ]);
    }
}
