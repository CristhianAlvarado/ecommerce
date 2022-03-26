<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        File::deleteDirectory('public/storage/subcategories');
        File::makeDirectory('public/storage/subcategories');

        File::deleteDirectory('public/storage/categories');
        File::makeDirectory('public/storage/categories');

        File::deleteDirectory('public/storage/products');
        File::makeDirectory('public/storage/products');
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);

        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);

        $this->call(SizeSeeder::class);
    }
}
