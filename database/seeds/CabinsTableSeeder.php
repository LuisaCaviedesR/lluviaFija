<?php

use Illuminate\Database\Seeder;
use App\Cabin;
class CabinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cabins')->delete();

        Cabin::create([
                'cabin_number' => '1',
                'description'  => 'test',
                'capacity'=>'1',
                'price'=>'12',
                'available'=>'1'
        ]);
    }
}
