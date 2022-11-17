<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'name' => 'Bracelets',
            'slug' => Str::slug('Bracelets', '-'),
            'fk_category_id' => 1

        ]);

        SubCategory::create([
            'name' => 'Brooches',
            'slug' => Str::slug('Brooches', '-'),
            'fk_category_id' => 1

        ]);

        SubCategory::create([
            'name' => 'Cufflinks',
            'slug' => Str::slug('Cufflinks', '-'),
            'fk_category_id' => 1

        ]);

        SubCategory::create([
            'name' => 'Earrings',
            'slug' => Str::slug('Earrings', '-'),
            'fk_category_id' => 1

        ]);

        SubCategory::create([
            'name' => 'Necklaces',
            'slug' => Str::slug('Necklaces', '-'),
            'fk_category_id' => 1

        ]);

        SubCategory::create([
            'name' => 'Rings',
            'slug' => Str::slug('Rings', '-'),
            'fk_category_id' => 1

        ]);
    }
}
