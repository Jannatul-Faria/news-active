<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
                 'United States' => 'US',
            'United Kingdom' => 'UK',
            'Canada' => 'CA',
            'Australia' => 'AU',
            'Germany' => 'DE',
            'France' => 'FR',
            'Italy' => 'IT',
            'Japan' => 'JP',
            'Brazil' => 'BR',
            'China' => 'CN',
            'India' => 'IN',
            'Russia' => 'RU',
            'South Africa' => 'ZA',
            'Mexico' => 'MX',
            'Spain' => 'ES',
            'Argentina' => 'AR',
            'South Korea' => 'KR',
            'Indonesia' => 'ID',
            'Turkey' => 'TR',
            'Saudi Arabia' => 'SA',
            'Nigeria' => 'NG',
            'Egypt' => 'EG',
            'Iran' => 'IR',
            'Pakistan' => 'PK',
            'Bangladesh' => 'BD',
            'Thailand' => 'TH',
            'Vietnam' => 'VN',
            'Philippines' => 'PH',
            'Netherlands' => 'NL',
            'Switzerland' => 'CH'

        ];

        foreach ($countries as $name => $code) {
            Country::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'code' => $code,
            ]);
        }
    }
}