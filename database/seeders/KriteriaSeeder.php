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
                'key' => 'kewarganegaraan',
                'value' => 'WNI'
            ],
            [
                'key' => 'umur',
                'value' => 'Lansia'
            ],
            [
                'key' => 'pendapatan',
                'value' => 'Pendapatan < Rp. 300.000 / bulan'
            ],
            [
                'key' => 'pekerjaan', 
                'value' => 'Non ASN, TNI atau POLRI'
            ]
        ]);
    }
}
