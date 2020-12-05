<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
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
                'username' => 'admin',
                'password' => 'chelsea',
                'email' => 'abc1@gmail.com',
                'phone' => '0983536539',
                'address' => 'Hung Yen Provine',
            ],
            [
                'username' => 'admin1',
                'password' => 'chelsea',
                'email' => 'abc2@gmail.com',
                'phone' => '0983536539',
                'address' => 'Hung Yen Provine',
            ],
            [
                'username' => 'admin2',
                'password' => 'chelsea',
                'email' => 'abc3@gmail.com',
                'phone' => '0983536539',
                'address' => 'Hung Yen Provine',
            ]
        ];

        DB::table('users')->insert($data);
    }
}
