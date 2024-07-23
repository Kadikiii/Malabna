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
            'price_per_hour' => 30,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب السد',
            'description' => 'مقابل نادي السد',
            'address' => 'الكيش',
            'price_per_hour' => 40,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب فينيسيا',
            'description' => 'شارع حلواني الفايدي',
            'address' => 'فينيسيا',
            'price_per_hour' => 50,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب قاريونس',
            'description' => '6 أشخاص للفريق',
            'address' => 'قاريونس',
            'price_per_hour' => 55,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب دبي',
            'description' => '7 أشخاص للفريق',
            'address' => 'دبي',
            'price_per_hour' => 60,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب أكاديمية النجم',
            'description' => '7 أشخاص للفريق',
            'address' => 'الماجوري',
            'price_per_hour' => 70,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب فينيسيا',
            'description' => 'شارع حلواني الفايدي',
            'address' => 'فينيسيا',
            'price_per_hour' => 75,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب الجوهرة',
            'description' => '6 أشخاص للفريق',
            'address' => 'قاريونس',
            'price_per_hour' => 70,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب الهلال',
            'description' => '8 أشخاص للفريق',
            'address' => 'البركة',
            'price_per_hour' => 80,
            'image' => '',
        ]);
        Court::create([
            'name' => 'ملعب الملك',
            'description' => '8 أشخاص للفريق',
            'address' => 'بلعون',
            'price_per_hour' => 85,
            'image' => '',
        ]);
    }
}
