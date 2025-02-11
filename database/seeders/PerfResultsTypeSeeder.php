<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PerfResultsType;

class PerfResultsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'รายงานงบการเงิน'],
            ['type_name' => 'รายผลการดำเนินงาน'],
            ['type_name' => 'รายงานการติดตามและประเมิน'],
        ];

        foreach ($data as $item) {
            PerfResultsType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
