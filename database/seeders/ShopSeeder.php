<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shops')->insert([
            [
                'name' => 'ここに店名が入ります',
                'owner_id' => 1,
                'information' => 'ここにお店の情報がはいります',
                'filename' => 'sample1.jpg',
                'is_selling' => true,
            ],
            [
                'name' => 'ここに店名が入ります',
                'owner_id' => 2,
                'information' => 'ここにお店の情報がはいります',
                'filename' => 'sample2.jpg',
                'is_selling' => true,
            ],
        ]);
    }
}
