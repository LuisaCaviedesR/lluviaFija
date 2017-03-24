<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role= Role::where('name', '=' ,'Administrador')->firstOrFail();
         User::create([
                'name' => 'Usuario',
                'lastname'  => 'Adminsitrador',
                'email'=>'administrador@mail.com',
                'password'=>'proyecto2017',
                'rol_id'=>$role->id
        ]);
    }
}
