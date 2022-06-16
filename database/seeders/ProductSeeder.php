<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder para camisas
        for($i=1; $i<=14; $i++) {
            if($i<10){
                $i = '0'.$i;
            }
            Product::create([
                'title' => 'Camiseta estampada',
                'type' => 'clothings',
                'short_description' => 'Camiseta estampada',
                'description' => 'Camiseta com estampa',
                'tags' => 'camiseta, estampa, camiseta estampada',
                'price' => 39.99,
                'image' => 'img\Camisas\camisa_f_'. $i . '_01.jpg',
                'image_2' => 'img\Camisas\camisa_f_'. $i . '_02.jpg',
                'image_3' => 'img\Camisas\camisa_f_'. $i . '_03.jpg',
                'image_4' => 'img\Camisas\camisa_f_'. $i . '_04.jpg',
                'image_5' => 'img\Camisas\camisa_f_'. $i . '_05.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // seeder para sapatos
        for($i=1; $i<=7; $i++) {
            if($i<10){
                $i = '0'.$i;
            }
            Product::create([
                'title' => 'Sapato feminino',
                'type' => 'shoes',
                'short_description' => 'Sapato feminino',
                'description' => 'Sapatos modernos e femininos',
                'tags' => 'sapato, sapato moderno, sapato feminino, feminino, moderno',
                'price' => 39.99,
                'image' => 'img\sapatos\sapato_f_'. $i . '_01.jpg',
                'image_2' => 'img\sapatos\sapato_f_'. $i . '_02.jpg',
                'image_3' => 'img\sapatos\sapato_f_'. $i . '_03.jpg',
                'image_4' => 'img\sapatos\sapato_f_'. $i . '_04.jpg',
                'image_5' => 'img\sapatos\sapato_f_'. $i . '_05.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Product::create([
                'title' => 'Sapato masculino',
                'type' => 'shoes',
                'short_description' => 'Sapato masculino',
                'description' => 'Sapatos modernos e masculinos',
                'tags' => 'sapato, sapato moderno, sapato masculino, masculino, moderno',
                'price' => 39.99,
                'image' => 'img\sapatos\sapato_m_'. $i . '_01.jpg',
                'image_2' => 'img\sapatos\sapato_m_'. $i . '_02.jpg',
                'image_3' => 'img\sapatos\sapato_m_'. $i . '_03.jpg',
                'image_4' => 'img\sapatos\sapato_m_'. $i . '_04.jpg',
                'image_5' => 'img\sapatos\sapato_m_'. $i . '_05.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
