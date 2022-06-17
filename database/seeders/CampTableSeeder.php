<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps=[
            [
                'title' => 'Fulltime learning',
                'slug' => 'fulltime-learning',
                'price' => '500',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Parttime learning',
                'slug' => 'partime-learning',
                'price' => '300',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];
        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
