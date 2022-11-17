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
        Tag::create([
            'name' => 'Yellow Gold',
        ]);
        Tag::create([
            'name' => 'Malachite',
        ]);
        Tag::create([
            'name' => 'Diamonds',
        ]);
        Tag::create([
            'name' => 'Enamel',
        ]);
        Tag::create([
            'name' => 'White Mother-of-Pearl',
        ]);
        Tag::create([
            'name' => 'One Diamond',
        ]);
        Tag::create([
            'name' => 'Rose Gold',
        ]);
        Tag::create([
            'name' => 'White Gold',
        ]);
        Tag::create([
            'name' => 'Pearls',
        ]);
        Tag::create([
            'name' => 'Rubber',
        ]);
        Tag::create([
            'name' => 'Black Onyx',
        ]);
        Tag::create([
            'name' => 'Turquoise',
        ]);
        Tag::create([
            'name' => 'Black Onyx',
        ]);
    }
}
