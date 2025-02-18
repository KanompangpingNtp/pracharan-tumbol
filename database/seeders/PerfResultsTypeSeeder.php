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

            ['type_name' => 'งบประมาณรายจ่ายประจำปี'],
            ['type_name' => 'รายงานผลการดำเนินงานรอบ6เดือน'],

            ['type_name' => 'การปฏิบัติงาน'],

            ['type_name' => 'นโยบายการบริหารทรัพยากรบุคคล'],
            ['type_name' => 'การดำเนินการตามนโยบายและการบริหารทรัพยากรบุคคล'],
            ['type_name' => 'หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล'],
            ['type_name' => 'รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล'],

            ['type_name' => 'มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต'],
            ['type_name' => 'รายงานแสดงฐานะการเงิน'],
            ['type_name' => 'การลดขั้นตอนการปฏิบัติงาน'],

            ['type_name' => 'ประมวลจริยธรรม'],
        ];

        foreach ($data as $item) {
            PerfResultsType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
