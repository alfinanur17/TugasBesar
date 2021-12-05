<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama produk' => 'Bugenvil', 'keterangan' => 'Bungan Hias', 'harga' => 5000],
            ['nama produk' => 'Daisy', 'keterangan' => 'Bungan karangan', 'harga' => 7000],
            ['nama produk' => 'Mawar', 'keterangan' => 'Bungan Pasangan', 'harga' => 15000],
            ];
            DB::table('produk')->insert($produks);
            }
    }
