<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                        ['name' => 'nhiều tiền'],
                        ['name' => 'ít tiền'],
                        ['name' => 'vừa tiền'],
                        ['name' => 'giàu'],
                        ['name' => 'nghèo']
                    
            ]
        );
    }
}

                