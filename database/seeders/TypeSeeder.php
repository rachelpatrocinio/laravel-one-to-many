<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('types')->truncate();
        $types = ['Type1', 'Type2', 'Type3', 'Type4'];
        foreach($types as $type){
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->save();
        }
    }
}
