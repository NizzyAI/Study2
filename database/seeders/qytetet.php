<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qytetet extends Seeder
{
    public function run(): void
    {
        DB::table('qytetet')->insert([
        ['name' => 'Prishtina'],   
        ['name' => 'Mitrovica'],   
        ['name' => 'Peja'],   
        ['name' => 'Prizreni'],   
        ['name' => 'Ferizaji'],   
        ['name' => 'Gjilani'],   
        ['name' => 'Gjakova']
        ]);
    }
}
