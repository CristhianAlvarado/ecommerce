<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            [
                'category_id' => 1,
                'name' => 'Celulares y smartphone',
                'slug' => Str::slug('Celulares y smartphone'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
            ],
            /* TV, audio y video */
            [
                'category_id' => 2,
                'name' => 'TV y audio',
                'slug' => Str::slug('TV y audio'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
                'color' => false
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
                'color' => false
            ],
            /* Consola y videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => false
            ],
            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
                'color' => false
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC'),
                'color' => false
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'color' => false
            ],
            /* Computacion */
            [
                'category_id' => 4,
                'name' => 'Portátiles',
                'slug' => Str::slug('Portátiles'),
                'color' => false
            ],
            [
                'category_id' => 4,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio'),
                'color' => false
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
                'color' => false
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios computadoras',
                'slug' => Str::slug('Accesorios computadoras'),
                'color' => false
            ],
            /* Moda */
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
                'color' => true,
                'size' => true
            ]
        ];

        foreach ($subcategories as $sc){
            Subcategory::factory(1)->create($sc);
        }
    }
}
