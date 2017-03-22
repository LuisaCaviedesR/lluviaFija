<?php

use Illuminate\Database\Seeder;
use App\affiliate;
class AffiliatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affiliates')->delete();

        affiliate::create([
                'email' => 'lcaviedesrestrepo@gmail.com',
                'name'  => 'Luisa',
                'lastname'=>'Caviedes',
                'number_id'=>'25025590',
                'phone'=>'316698334',
                'id_type_document'=>'1'
        ]);
    }
}
