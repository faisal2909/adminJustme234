<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'name'=> 'Kintamani',
            'type'=> 'Arabika',
            'slug'=> 'product-kintamani',
            'source'=>'Bali',
            'excerpt'=>'Kopi Arabika yang memiliki Cita Rasa yang Unik dari Bali',
            'desc'=>'Biji kopi dari dataran tinggi Kintamani, Bali, dikenal dengan cita rasa unik yang cerah dan fruity. Memiliki aroma segar dengan sentuhan rasa jeruk atau lemon, kopi ini ideal untuk pecinta kopi dengan profil rasa ringan dan menyegarkan.'
        ]);

        Product::create([
            'name'=> 'Mandailing',
            'type'=> 'Arabika',
            'slug'=> 'product-mandailing',
            'source'=>'Sumatera Utara',
            'excerpt'=>'Kopi Arabika dari Sumatera Utara dengan Aroma Herbal yang Wow',
            'desc'=>'Berasal dari Sumatera Utara, kopi Mandailing menawarkan rasa yang kaya dan kompleks dengan tubuh penuh. Dikenal dengan aftertaste cokelat dan rempah yang khas, kopi ini menjadi favorit para pecinta espresso karena kepekatannya.'
        ]);

        Product::create([
            'name'=> 'Bajawa',
            'type'=> 'Arabika-Robusta',
            'slug'=> 'product-bajawa',
            'source'=>'Nusa Tenggara Timur',
            'excerpt'=>'Jenis Kopi di Indonesia Bagian Timur yang Penuh Kenikmatan',
            'desc'=>'Ditumbuhkan di tanah vulkanik Flores, kopi Bajawa menghadirkan rasa earthy dengan sentuhan kacang dan rempah-rempah. Memiliki aroma hangat dan lembut, biji kopi ini cocok untuk mereka yang mencari pengalaman rasa yang otentik dan seimbang.'
        ]);
    }
}
