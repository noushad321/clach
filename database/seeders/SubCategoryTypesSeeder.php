<?php

namespace Database\Seeders;

use App\Models\SubCategoryType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategoryTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategoryType::create([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::create([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::create([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::create([
            'name' => 'Rubber Me',
            'slug' => Str::slug('Rubber Me', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::create([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 1

        ]);

        SubCategoryType::create([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 2

        ]);
        SubCategoryType::create([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 2

        ]);

        SubCategoryType::create([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 3

        ]);
        SubCategoryType::create([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 3

        ]);

        SubCategoryType::create([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::create([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::create([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::create([
            'name' => 'Rubber Me',
            'slug' => Str::slug('Rubber Me', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::create([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 4

        ]);

        SubCategoryType::create([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::create([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::create([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::create([
            'name' => 'Rubber Me',
            'slug' => Str::slug('Rubber Me', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::create([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 5

        ]);

        SubCategoryType::create([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 6

        ]);
        SubCategoryType::create([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 6

        ]);
        SubCategoryType::create([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 6

        ]);


    }
}
