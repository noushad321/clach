<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::firstOrCreate([
            'name' => 'Collection',
            'slug' => Str::slug('Collection', '-')

        ]);

        Category::firstOrCreate([
            'name' => 'La Maison',
            'slug' => Str::slug('La Maison', '-')

        ]);
    }
}
