<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PAdquiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p_adquieres')->truncate();

        DB::table('p_adquieres')->insert(['planadquiere'=>'2642']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2645']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2668']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2669']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3054']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3055']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3017']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3109']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3110']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2609']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2597']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3330']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3321']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'3315']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2528']);
        DB::table('p_adquieres')->insert(['planadquiere'=>'2595']);
    }
}
