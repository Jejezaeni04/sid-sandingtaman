<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sejarah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sejarahs')->insert([
            'deskripsi' => 'Desa Sandingtaman terletak di Kecamatan Panjalu, Kabupaten Ciamis, Provinsi Jawa Barat. Desa ini berada di wilayah yang subur dengan iklim tropis dan dikelilingi oleh pegunungan dan perbukitan yang menawarkan pemandangan alam yang indah. Sebagian besar penduduk Desa Sandingtaman bekerja di sektor pertanian, dengan bercocok tanam padi, sayur-mayur dll. Masyarakat Desa Sandingtaman sangat menghargai tradisi dan budaya local, sering mengadakan upacara adat dan kesenian tradisional'
        ]);
    }
}
