<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qytetaret extends Seeder
{
    public function run(): void
    {
        DB::table('qytetaret')->insert([
            ['emri' => 'Nizam','mbiemri' => 'Hisari','gjinia' => 'M','viti_i_lindjes' => '1996','qyteti_id' => '4'],  
            ['emri' => 'Fatih','mbiemri' => 'Alija','gjinia' => 'M','viti_i_lindjes' => '1999','qyteti_id' => '4'],  
            ['emri' => 'Rinesa','mbiemri' => 'Krasniqi','gjinia' => 'F','viti_i_lindjes' => '2004','qyteti_id' => '2'],  
            ['emri' => 'Engjellushe','mbiemri' => 'Krasniqi','gjinia' => 'F','viti_i_lindjes' => '2004','qyteti_id' => '1'],  
            ['emri' => 'Gent','mbiemri' => 'Karaxhiu','gjinia' => 'M','viti_i_lindjes' => '1992','qyteti_id' => '3']
            ]);
    }
}
