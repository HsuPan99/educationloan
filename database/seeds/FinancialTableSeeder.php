<?php

use Illuminate\Database\Seeder;

class FinancialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Financial_Info::class,3)->create();
        
    }
}
