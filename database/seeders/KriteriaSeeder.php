<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria')->insert([
            [
                'key' => 'WNI',
                'value' => ''
            ],
            [
                'key' => 'Lansia',
                'value' => ''
            ],
            [
                'key' => 'Pendapatan < Rp. 300.000 / bulan',
                'value' => ''
            ],
            [
                'key' => 'Non ASN, TNI atau POLRI', 
                'value' => ''
            ]
        ]);
    }
}
