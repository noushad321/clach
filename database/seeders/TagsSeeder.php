<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::firstOrCreate([
            'name' => 'Malachite',
        ]);
        Tag::firstOrCreate([
            'name' => 'Diamonds',
        ]);
        Tag::firstOrCreate([
            'name' => 'Enamel',
        ]);
        Tag::firstOrCreate([
            'name' => 'White Mother-of-Pearl',
        ]);
        Tag::firstOrCreate([
            'name' => 'One Diamond',
        ]);
        Tag::firstOrCreate([
            'name' => 'Pearls',
        ]);
        Tag::firstOrCreate([
            'name' => 'Rubber',
        ]);
        Tag::firstOrCreate([
            'name' => 'Black Onyx',
        ]);
        Tag::firstOrCreate([
            'name' => 'Turquoise',
        ]);
        Tag::firstOrCreate([
            'name' => 'Black Onyx',
        ]);
    }
}
