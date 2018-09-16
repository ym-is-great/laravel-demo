<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // my code

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // my code start

        DB::table('classes')->insert(['name' => '三年一班']);
        DB::table('classes')->insert(['name' => '三年二班']);
        DB::table('classes')->insert(['name' => '三年三班']);

        // my code end
    }
}
