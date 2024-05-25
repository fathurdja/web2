<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Produk::factory()->create([
        //     'name' => 'Pempek',
        //     'price' => 20000,
        //     'category'=>'makanan'
        // ]);
    
        $this->call([
            Bookseeder::class,
        ]);
    } 
    
}
