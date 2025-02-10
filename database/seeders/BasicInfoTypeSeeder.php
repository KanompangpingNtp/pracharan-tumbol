<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BasicInfoType ;

class BasicInfoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'ประวัติความเป็นมา'],
            ['type_name' => 'วิสัยทัศน์/พันธกิจ'],
            ['type_name' => 'ข้อมูลสภาพทั่วไป'],
            ['type_name' => 'ยุทธศาสตร์และแนวทางการพัฒนา'],

            //หลายรายการ
            ['type_name' => 'ผลิตภัณฑ์ชุมชน/OTOP'],
            ['type_name' => 'สถานที่สำคัญ/แหล่งท่องเที่ยว'],

            ['type_name' => 'อำนาจหน้าที่'],
            ['type_name' => 'นโยบายการบริหาร/เจตจำนงสุจริต'],
        ];

        foreach ($data as $item) {
            BasicInfoType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
