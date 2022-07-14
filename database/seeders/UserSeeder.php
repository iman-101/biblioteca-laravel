<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario1 = new User();
        $usuario1->name='saida';
        $usuario1->apellido1='malki';
        $usuario1->apellido2='malki';
        $usuario1->password='00000000';
        $usuario1->email='saida@gmail.com';
        $usuario1->save();
    }
}
