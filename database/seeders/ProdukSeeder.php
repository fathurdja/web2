<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::factory()->create([
            'name' => 'Pempek',
            'description' => 'ini adalah makananan khas palembang ',
            'price' => 20000,

        ]);
        Produk::factory()->create([
            'name' => 'Coto Makassar',
            'description' => 'ini adalah makananan khas Makassar ',
            'price' => 15000,

        ]);
        Produk::factory()->create([
            'name' => 'Kerak Telur',
            'description' => 'ini adalah makananan khas Jakarta ',
            'price' => 10000,

        ]);
    }
}
