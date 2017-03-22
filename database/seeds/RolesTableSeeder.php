<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        $roles =[
        
        [
            'name'  => "Administrador"
            
        ],
        [
             'name'  => "Empleado"
        ] 
            
    ];
    DB::table('roles')->delete();
    foreach ($roles as $role){
        Role::create($role);
    }
    }
}
