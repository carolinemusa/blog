<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Sapato',
            'quantidade' => 10,
            'valor' => 100.10,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Tenis',
            'quantidade' => 15,
            'valor' => 150.25,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Crocs',
            'quantidade' => 30,
            'valor' => 290.71,
        ]);
    }
}
