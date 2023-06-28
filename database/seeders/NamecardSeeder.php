<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamecardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('namecards')->insert(
        [
            'name' => '田中太郎',
            'companyname' => '吉本興業株式会社',
            'path' => 'namecard1.png',
        ],
        [
            'name' => '鈴木俊光',
            'companyname' => 'ワールドプレスコーポレーション',
            'path' => 'namecard1.png',
        ],
    );
    }
}
