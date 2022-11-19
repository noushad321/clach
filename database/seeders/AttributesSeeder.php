<?php

namespace Database\Seeders;

use App\Models\Attributes;
use App\Models\AttributeValues;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attributes::firstOrCreate([
            'name' => 'metal',
        ]);

        AttributeValues::firstOrCreate([
            'fk_attribute_id' => 1,
            'value' => 'Yellow Gold'
        ]);

        AttributeValues::firstOrCreate([
            'fk_attribute_id' => 1,
            'value' => 'Rose Gold'
        ]);

        AttributeValues::firstOrCreate([
            'fk_attribute_id' => 1,
            'value' => 'White Gold'
        ]);
    }
}
