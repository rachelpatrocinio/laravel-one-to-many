<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['type1', 'type2', 'type3'];
        foreach($types as $type){
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->save();
        }
    }
}
