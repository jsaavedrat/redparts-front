<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Iphone 10',
            'description' => 'Color Negro',
            'amount' => 900
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung S10',
            'description' => 'Color Negro',
            'amount' => 700
        ]);
        DB::table('products')->insert([
            'name' => 'Huawei 10',
            'description' => 'Color Negro',
            'amount' => 300
        ]);
    }
}
