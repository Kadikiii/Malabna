<?php

namespace Database\Seeders;

use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Court::create([
            'name' => 'ملعب احمد الزوي',
            'description' => 'مقابل مول اوف بنغازي',
            'address' => 'سي فرج',
            'price_per_hour' => 50.0,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب السد',
            'description' => 'مقابل نادي السد',
            'address' => 'الكيش',
            'price_per_hour' => 60.0,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب فينيسيا',
            'description' => 'فينيسيا',
            'address' => 'شارع حلواني الفايدي',
            'price_per_hour' => 70.0,
            'image' => '',
        ]);
    }
}
