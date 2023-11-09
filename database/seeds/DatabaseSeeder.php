<?php

use App\Produto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(MotivoContatoSeeder::class);
        // $this->call(FornecedorSeeder::class);
        // $this->call(SiteContatoSeeder::class);
        $this->call(Produto::class);
        // App\Produto::factory(10)->create(10);
    }
}
