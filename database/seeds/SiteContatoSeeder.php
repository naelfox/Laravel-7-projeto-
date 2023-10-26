<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $siteContato = new SiteContato();
        // $siteContato->nome = 'JJ';
        // $siteContato->telefone = '11 99988888';
        // $siteContato->email = 'jj@email.com';
        // $siteContato->motivo_contato = '1';
        // $siteContato->mensagem = 'muito bom';
        // $siteContato->save();

        factory(SiteContato::class, 100)->create();
    }
}
