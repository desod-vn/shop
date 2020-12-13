<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_types' => 1,
                'name' => 'Giày Thượng Đỉnh',
                'price' => 70000,
                'content' => '',
                'bought' => 100,
                'link' => 'giay-thuong-dinh',
                'stars' => 10,
                'photos' =>  ''
            ],
            [
                'id_types' => 2,
                'name' => 'Giày Nike',
                'price' => 7000000,
                'content' => '',
                'bought' => 100,
                'link' => 'giay-nike',
                'stars' => 10,
                'photos' =>  ''
            ],
            [
                'id_types' => 3,
                'name' => 'Dép cross',
                'price' => 150000,
                'content' => '',
                'bought' => 100,
                'link' => 'dep-cross',
                'stars' => 10,
                'photos' =>  ''
            ]
        ];

        DB::table('products')->insert($data);
    }
}
