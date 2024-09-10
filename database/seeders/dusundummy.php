<?php

namespace Database\Seeders;

use App\Models\dusun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dusundummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dusundata = [
            [
                'nama_dusun'=>'Dusun Citaman',
            ],
            [
                'nama_dusun'=>'Dusun Sanding',
            ],
            [
                'nama_dusun'=>'Dusun Karoya',
            ],
            [
                'nama_dusun'=>'Dusun Cipicung',
            ],
            [
                'nama_dusun'=>'Dusun Sindangjaya',
            ],
            [
                'nama_dusun'=>'Dusun Cidarma',
            ],
            [
                'nama_dusun'=>'Dusun Naggela',
            ],
        ];

        foreach ($dusundata as $key => $value) {
            dusun::create($value);
        }
    }
}
