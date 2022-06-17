<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => '1',
                'name' => '>1jt menit video belajar' ,
            ],
            [
                'camp_id' => '1',
                'name' => 'UTBK center' ,
            ],
            [
                'camp_id' => '1',
                'name' => '10x tryout UTBK Premium dengan pembahasan' ,
            ],
            [
                'camp_id' => '1',
                'name' => 'Rangkuman infografis setiap bab' ,
            ],
            [
                'camp_id' => '1',
                'name' => '>400rbu soal lengkap dengan pembahasan' ,
            ],
            [
                'camp_id' => '1',
                'name' => 'Akses semua mata pelajaran kelas 10, 11, 12 SMA dan SMK' ,
            ],
            [
                'camp_id' => '1',
                'name' => 'Download materi offline' ,
            ],
            [
                'camp_id' => '1',
                'name' => 'Jadwal belajar' ,
            ],
            [
                'camp_id' => '1',
                'name' => 'Laporan belajar' ,
            ],
            [
                'camp_id' => '2',
                'name' => '>850rb menit video belajar' ,
            ],
            [
                'camp_id' => '2',
                'name' => 'Rencana belajar mingguan dari master teacher' ,
            ],
            [
                'camp_id' => '2',
                'name' => 'Akses semua mata pelajaran 10, 11, dan 12 SMA dan SMK' ,
            ],
            [
                'camp_id' => '2',
                'name' => '> 400rbu soal lengkap dengan pembahasan' ,
            ],
            [
                'camp_id' => '2',
                'name' => 'Rangkuman infografis materi setiap bab' ,
            ],
            [
                'camp_id' => '2',
                'name' => 'Download materi offline' ,
            ],
            [
                'camp_id' => '2',
                'name' => 'Jadwal belajar' ,
            ],
            [
                'camp_id' => '2',
                'name' => 'Laporan belajar' ,
            ],
        ];

        foreach ($campBenefits as $key => $campBenefit) {
            CampBenefit::create($campBenefit);
        }
    }
}
