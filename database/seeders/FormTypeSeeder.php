<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FormType;

class FormTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'รับเรื่องราวร้องทุกข์'],
            ['type_name' => 'รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ'],
        ];

        foreach ($data as $item) {
            FormType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
