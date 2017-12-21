<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_superadmin = new Role();
      $role_superadmin->name = 'superadmin';
      $role_superadmin->description = 'Top Management';
      $role_superadmin->save();

      $role_resepsionis = new Role();
      $role_resepsionis->name = 'resepsionis';
      $role_resepsionis->description = 'Meja Registrasi';
      $role_resepsionis->save();

      $role_dokter = new Role();
      $role_dokter->name = 'dokter';
      $role_dokter->description = 'Periksa oleh dokter';
      $role_dokter->save();

      $role_apoteker = new Role();
      $role_apoteker->name = 'apoteker';
      $role_apoteker->description = 'Pengelolaan Obat';
      $role_apoteker->save();
    }
}
