<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanadquieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('planadquieres')->truncate();

        DB::table('planadquieres')->insert(['planadquiere'=>'2642']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2645']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2668']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2669']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3054']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3055']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3017']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3109']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3110']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2609']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2597']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3330']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3321']);
        DB::table('planadquieres')->insert(['planadquiere'=>'3315']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2528']);
        DB::table('planadquieres')->insert(['planadquiere'=>'2595']);





    }
}
