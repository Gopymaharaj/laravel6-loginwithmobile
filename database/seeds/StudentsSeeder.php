<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countrys')->insert([
            [
                'country'=>'india'
            ],
            [
                'country'=>'pakistan'
            ],
            [
                'country'=>'china'
            ]
            
        ]);
    }
}
