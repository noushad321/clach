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
        SubCategoryType::firstOrCreate([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Rubber Me',
            'slug' => Str::slug('Rubber Me', '-'),
            'fk_sub_category_id' => 1

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 1

        ]);

        SubCategoryType::firstOrCreate([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 2

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 2

        ]);

        SubCategoryType::firstOrCreate([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 3

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 3

        ]);

        SubCategoryType::firstOrCreate([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Rubber Me',
            'slug' => Str::slug('Rubber Me', '-'),
            'fk_sub_category_id' => 4

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 4

        ]);

        SubCategoryType::firstOrCreate([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Rubber Me',
            'slug' => Str::slug('Rubber Me', '-'),
            'fk_sub_category_id' => 5

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Symbols',
            'slug' => Str::slug('Symbols', '-'),
            'fk_sub_category_id' => 5

        ]);

        SubCategoryType::firstOrCreate([
            'name' => 'Butterfly',
            'slug' => Str::slug('Butterfly', '-'),
            'fk_sub_category_id' => 6

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Clip',
            'slug' => Str::slug('Clip', '-'),
            'fk_sub_category_id' => 6

        ]);
        SubCategoryType::firstOrCreate([
            'name' => 'Nut',
            'slug' => Str::slug('Nut', '-'),
            'fk_sub_category_id' => 6

        ]);


    }
}
