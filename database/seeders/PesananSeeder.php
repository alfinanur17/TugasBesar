<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanans = [
            ['nama' => 'Sayang0', 'alamat lengkap' => 'Tuban, Jatim', 'nomor telepon' => '089765879755', 'nomor rekening' => '203978642'],
            ['nama' => 'Sayang1', 'alamat lengkap' => 'Surabaya, Jatim', 'nomor telepon' => '086753896439', 'nomor rekening' => '203987536'],
            ['nama' => 'Sayang2', 'alamat lengkap' => 'Malang, Jatim', 'nomor telepon' => '08215784945', 'nomor rekening' => '20388735472'],
            ];
            DB::table('pesanan')->insert($pesanans);
            }
    }