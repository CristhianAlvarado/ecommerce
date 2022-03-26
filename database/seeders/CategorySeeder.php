<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Celulares y Tablets',
                'slug' => Str::slug('Celulares y Tablets'),
                'icon' => '<i class="fa-solid fa-mobile-notch"></i>'
            ],
            [
                'name' => 'TV, audio y video',
                'slug' => Str::slug('TV, audio y video'),
                'icon' => '<i class="fa-solid fa-tv"></i>'
            ],
            [
                'name' => 'Consola y videojuegos',
                'slug' => Str::slug('Consola y videojuegos'),
                'icon' => '<i class="fa-solid fa-gamepad-modern"></i>'
            ],
            [
                'name' => 'Computacion',
                'slug' => Str::slug('Computacion'),
                'icon' => '<i class="fa-solid fa-laptop"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fa-solid fa-shirt"></i>'
            ],
        ];

        foreach ($categories as $c){
            $category = Category::factory(1)->create($c)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $b){
                $b->categories()->attach($category->id);
            }
        }
    }
}
