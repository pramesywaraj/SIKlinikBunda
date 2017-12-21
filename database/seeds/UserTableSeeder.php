<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'superadmin')->first();
        $role_resepsionis  = Role::where('name', 'resepsionis')->first();
        $role_dokter = Role::where('name', 'dokter')->first();
        $role_apoteker  = Role::where('name', 'apoteker')->first();


        $superadmin = new User();
        $superadmin->name = 'superadmin';
        $superadmin->email = 'superadmin@bunda.com';
        $superadmin->password = bcrypt('superadmin');
        $superadmin->save();
        $superadmin->roles()->attach($role_superadmin);

        $resepsionis = new User();
        $resepsionis->name = 'resepsionis';
        $resepsionis->email = 'resepsionis@bunda.com';
        $resepsionis->password = bcrypt('resepsionis');
        $resepsionis->save();
        $resepsionis->roles()->attach($role_resepsionis);

        $dokter = new User();
        $dokter->name = 'dokter';
        $dokter->email = 'dokter@bunda.com';
        $dokter->password = bcrypt('dokter');
        $dokter->save();
        $dokter->roles()->attach($role_dokter);

        $apoteker = new User();
        $apoteker->name = 'apoteker';
        $apoteker->email = 'apoteker@bunda.com';
        $apoteker->password = bcrypt('apoteker');
        $apoteker->save();
        $apoteker->roles()->attach($role_apoteker);
    }
}
