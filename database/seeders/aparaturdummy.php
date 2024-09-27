<?php

namespace Database\Seeders;

use App\Models\Aparatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class aparaturdummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aparaturData = [
            [
                'nama'=>'Drs. H. Ili irfan Nawawi',
                'nik'=>'12323453435',
                'nohp'=> '089789543213',
                'email'=> 'ili@gmail.com',
                'alamat'=> 'Dusun Nanggela',
                'jabatan'=> 'Kepala Desa',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Hidayat Herditia',
                'nik'=>'09898766567',
                'nohp'=> '085157390887',
                'email'=> 'hidayat@gmail.com',
                'alamat'=> 'Dusun Karoya',
                'jabatan'=> 'Sekertaris Desa',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Aan Nurhasanah',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'aan@gmail.com',
                'alamat'=> 'Dusun Sanding',
                'jabatan'=> 'Kaur Umum',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Agus Hermawan',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'agus@gmail.com',
                'alamat'=> 'Dusun Sanding',
                'jabatan'=> 'Kaur Keuangan',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Riri Rahmawati',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'riri@gmail.com',
                'alamat'=> 'Dusun Karoya',
                'jabatan'=> 'Kaur Perencanaan',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Teguh Megaluh',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'galuh@gmail.com',
                'alamat'=> 'Dusun Cipicung',
                'jabatan'=> 'Kasi Pemerintahan',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Fazar H. Ramadhan',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'fajar@gmail.com',
                'alamat'=> 'Dusun Sindangjaya',
                'jabatan'=> 'Kasi Kesejahteraan',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Lili Sadili',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'lili@gmail.com',
                'alamat'=> 'Dusun Nanggela',
                'jabatan'=> 'Kasi Pelayanan',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Heri Hermanto, S.T.',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'heri@gmail.com',
                'alamat'=> 'Dusun Citaman',
                'jabatan'=> 'Kepala Dusun Citaman',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Iding Bathni, S',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'iding@gmail.com',
                'alamat'=> 'Dusun Karoya',
                'jabatan'=> 'Kepala Dusun Karoya',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Ading Sutardi',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'ading@gmail.com',
                'alamat'=> 'Dusung Cipicung',
                'jabatan'=> 'Kepala Dusun Cipicung',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Wawan Hermawan',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'wawan@gmail.com',
                'alamat'=> 'Dusun Sindangjaya',
                'jabatan'=> 'Kepala Dusun Sindangjaya',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Cece Hermawan',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'cece@gmail.com',
                'alamat'=> 'Dusun Cidarma',
                'jabatan'=> 'Kepala Dusun Cidarma',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Tatang Saprudin',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'tatang@gmail.com',
                'alamat'=> 'Dusun Nanggela',
                'jabatan'=> 'Kepala Dusun Nanggela',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
            [
                'nama'=>'Heri Latip',
                'nik'=>'-',
                'nohp'=> '-',
                'email'=> 'heriL@gmail.com',
                'alamat'=> 'Dusun Sanding',
                'jabatan'=> 'Kepala Dusun Sanding',
                'tgl_lahir'=> '-',
                'foto'=> 'user.png',
            ],
        ];

        foreach ($aparaturData as $key => $value) {
            Aparatur::create($value);
        }
    
    }
}
