<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Cargo;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '20391877',
            'name' => 'Juan Jose',
            'username' => 'juanjosexd',
            'slug' => 'juan-jose',
            'last_name' => ' Soto Peña',
            'email' => 'juanjosexdd7@gmail.com',
            'password' => 'juanjosexd'
        ]);

        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '123456789',
            'name' => 'Admin',
            'username' => 'admin',
            'slug' => 'admin',
            'last_name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'admin'
        ]);

        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '12345678',
            'name' => 'usuario',
            'username' => 'usuario',
            'slug' => 'usuario',
            'last_name' => 'Usuario',
            'email' => 'usuario@mail.com',
            'password' => 'usuario'
        ]);
        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '3456345',
            'name' => 'Pablo',
            'username' => 'pablobencomo',
            'slug' => 'pablo',
            'last_name' => 'Bencomo',
            'email' => 'Pablobencomo@mail.com',
            'password' => 'pablobencomo'
        ]);

        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '45645645',
            'name' => 'Betania',
            'username' => 'Betania',
            'slug' => 'usuario',
            'last_name' => 'Paez',
            'email' => 'Betaniapaez@mail.com',
            'password' => 'betania'
        ]);

        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '5463464',
            'name' => 'Cristian',
            'username' => 'cristian',
            'slug' => 'cristian',
            'last_name' => 'Daza',
            'email' => 'Cristiandaza@mail.com',
            'password' => 'cristian'
        ]);
       // User::factory(99)->create();
    }
}
