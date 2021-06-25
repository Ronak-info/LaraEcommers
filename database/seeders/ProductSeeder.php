<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        // DB::table('products')->insert([
        //     'name'=>'vivo Mobile',
        //     'price'=>'10000',
        //     'category'=>'mobile',
        //     'gallery'=>'file:///C:/Users/CoreXtrime/Downloads/img/vivo.jpg',
        //     'description'=>'This is best vivo phone',
        // ]);
        // DB::table('products')->insert([
        //     'name'=>'L.G Mobile',
        //     'price'=>'12000',
        //     'category'=>'mobile',
        //     'gallery'=>'file:///C:/Users/CoreXtrime/Downloads/img/lg.jpg',
        //     'description'=>'This is best vivo phone',
        // ]);
        // DB::table('products')->insert([
        //     'name'=>'Nokia mobile',
        //     'price'=>'14000',
        //     'category'=>'mobile',
        //     'gallery'=>'file:///C:/Users/CoreXtrime/Downloads/img/nokia.jpg',
        //     'description'=>'This is best vivo phone',
        // ]);
        // DB::table('products')->insert([
        //     'name'=>'Oppo mobile',
        //     'price'=>'16000',
        //     'category'=>'mobile',
        //     'gallery'=>'file:///C:/Users/CoreXtrime/Downloads/img/oppo.jpg',
        //     'description'=>'This is best vivo phone',
        // ]);

        DB::table('products')->insert([
            [
                'name'=>'vivo Mobile',
                'price'=>'10000',
                'category'=>'Mobile',
                'gallery'=>'vivo.jpg',
                'description'=>'This is best vivo phone',
            ],
            [
                'name'=>'LG TV',
                'price'=>'10000',
                'category'=>'TV',
                'gallery'=>'tv.jpg',
               'description'=>'This is best LG TV and much more',
            ],
            [
                'name'=>'Godrage Fridge',
                'price'=>'10000',
                'category'=>'Fridge',
                'gallery'=>'fridge.jpg',
                'description'=>'This is best Godrage Fridge and much more',
            ],
            [
                'name'=>'Usha FAN',
                'price'=>'10000',
                'category'=>'FAN',
                'gallery'=>'fan.jpg',
                'description'=>'This is best USHA FAN',
            ],

            ]);
    }
}
