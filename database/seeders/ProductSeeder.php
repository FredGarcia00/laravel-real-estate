<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=> 'Florida Home',
                'price'=>'250,000',
                'description' => '3bed. 2bath. 2400sf.',
                "category" => 'Homes',
                "gallery" => "img/home.jpg"
            ],
            [
                'name'=> 'California Apartments',
                'price'=>'1200',
                'description' => '2bed. 2bath. 1200sf.',
                "category" => 'Apartment',
                "gallery" => "img/apartment.jpg"
            ],
            [
                'name'=> 'Vacation Homes',
                'price'=>'185,000',
                'description' => '3bed. 2bath. 2400sf.',
                "category" => 'Homes',
                "gallery" => "img/lux.png"
            ],
            [
                'name'=> 'Condos',
                'price'=>'120,000',
                'description' => '3bed. 2bath. 2400sf.',
                "category" => 'condo',
                "gallery" => "img/condo.jpg"
            ],
            [
                'name'=> 'Los Angeles',
                'price'=>'600,000',
                'description' => '5bed. 4bath. 2500sf.',
                "category" => 'homes',
                "gallery" => "img/color.png"
            ],
            [
                'name'=> 'Los Angeles',
                'price'=>'3,500,000',
                'description' => '5bed. 5bath. 3600sf.',
                "category" => 'homes',
                "gallery" => "img/la.png"
            ]
        ]);
    }
}
