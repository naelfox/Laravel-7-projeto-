<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Natanael';
        $fornecedor->site = 'naelfox.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'naelfox@email.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'José',
            'site' => 'jose.com',
            'uf' => 'MT',
            'email' => 'jose@email.com',
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Maria',
            'site' => 'maria.com',
            'uf' => 'RS',
            'email' => 'maria@email.com',
        ]);
    }
}
