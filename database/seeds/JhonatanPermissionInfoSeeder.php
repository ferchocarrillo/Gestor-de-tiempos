<?php

use Illuminate\Database\Seeder;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use App\JhonatanPermission\Models\Porta;
use App\JhonatanPermission\Models\Fija;
use App\JhonatanPermission\Models\Upgrade;
use App\JhonatanPermission\Models\Prepost;
use App\JhonatanPermission\Models\Rechazos;
use App\JhonatanPermission\Models\Registro;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class JhonatanPermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();

            Permission::truncate();
            Role::truncate();
            DB::statement("SET foreign_key_checks=1");



        //user admin
        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'cedula'     =>'123456789',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')
        ]);

        //rol admin
        $roladmin=Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrador',
            'full-access' => 'yes'

        ]);

         //rol Registered User
         $roluser=Role::create([
            'name' => 'Registered User',
            'slug' => 'registereduser',
            'description' => 'Usuario Registrado',
            'full-access' => 'no'

        ]);
         //rol Analista User
         $analistauser=Role::create([
            'name' => 'Analista User',
            'slug' => 'analistauser',
            'description' => 'perfil analista',
            'full-access' => 'no'

        ]);

        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);


        //permission
        $permission_all = [];


        //permission role
        $permission = Permission::create([
            'name' => 'Index role',
            'slug' => 'role.index',
            'description' => 'Un usuario puede listar un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'Un usuario puede Ver un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'Un usuario puede Crear un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'Un usuario puede Editar un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'Un usuario puede Destruir un Rol',
        ]);

        $permission_all[] = $permission->id;



        //permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'Un usuario puede Listar un Usuario',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'Un usuario puede Ver un Usuario',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'Un usuario puede Editar un Usuario',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'Un usuario puede Destriur un Usuario',
        ]);

        $permission_all[] = $permission->id;


        //new
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'Un usuario puede Ver a si mismo',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'Un usuario puede Editar a si mismo',
        ]);

        //porta porta
        $porta = Permission::create([
            'name' => 'Index porta',
            'slug' => 'porta.index',
            'description' => 'Un usuario puede listar un Porta',
        ]);

        $porta_all[] = $porta->id;

        $porta = Permission::create([
            'name' => 'Show porta',
            'slug' => 'porta.show',
            'description' => 'Un usuario puede Ver un Porta',
        ]);

        $porta_all[] = $porta->id;

        $porta = Permission::create([
            'name' => 'Create porta',
            'slug' => 'porta.create',
            'description' => 'Un usuario puede Crear un Porta',
        ]);

        $porta_all[] = $porta->id;

        $porta = Permission::create([
            'name' => 'Edit porta',
            'slug' => 'porta.edit',
            'description' => 'Un usuario puede Editar un Porta',
        ]);

        $porta_all[] = $porta->id;

        $porta = Permission::create([
            'name' => 'Destroy porta',
            'slug' => 'porta.destroy',
            'description' => 'Un usuario puede Destruir un Porta',
        ]);

        $porta_all[] = $porta->id;

        //fija fija
        $fija = Permission::create([
            'name' => 'Index fija',
            'slug' => 'fija.index',
            'description' => 'Un usuario puede listar un Fija',
        ]);

        $fija_all[] = $fija->id;

        $fija = Permission::create([
            'name' => 'Show fija',
            'slug' => 'fija.show',
            'description' => 'Un usuario puede Ver un Fija',
        ]);

        $fija_all[] = $fija->id;

        $fija = Permission::create([
            'name' => 'Create fija',
            'slug' => 'fija.create',
            'description' => 'Un usuario puede Crear un Fija',
        ]);

        $fija_all[] = $fija->id;

        $fija = Permission::create([
            'name' => 'Edit fija',
            'slug' => 'fija.edit',
            'description' => 'Un usuario puede Editar un Fija',
        ]);

        $fija_all[] = $fija->id;

        $fija = Permission::create([
            'name' => 'Destroy fija',
            'slug' => 'fija.destroy',
            'description' => 'Un usuario puede Destruir un Fija',
        ]);

        $fija_all[] = $fija->id;


        //upgrade upgrade
        $upgrade = Permission::create([
            'name' => 'Index upgrade',
            'slug' => 'upgrade.index',
            'description' => 'Un usuario puede listar un Upgrade',
        ]);

        $upgrade_all[] = $upgrade->id;

        $upgrade = Permission::create([
            'name' => 'Show upgrade',
            'slug' => 'upgrade.show',
            'description' => 'Un usuario puede Ver un Upgrade',
        ]);

        $upgrade_all[] = $upgrade->id;

        $upgrade = Permission::create([
            'name' => 'Create upgrade',
            'slug' => 'upgrade.create',
            'description' => 'Un usuario puede Crear un Upgrade',
        ]);

        $upgrade_all[] = $upgrade->id;

        $upgrade = Permission::create([
            'name' => 'Edit upgrade',
            'slug' => 'upgrade.edit',
            'description' => 'Un usuario puede Editar un Upgrade',
        ]);

        $upgrade_all[] = $upgrade->id;

        $upgrade = Permission::create([
            'name' => 'Destroy upgrade',
            'slug' => 'upgrade.destroy',
            'description' => 'Un usuario puede Destruir un Upgrade',
        ]);

        $upgrade_all[] = $upgrade->id;

        //prepost prepost
        $prepost = Permission::create([
            'name' => 'Index prepost',
            'slug' => 'prepost.index',
            'description' => 'Un usuario puede listar un Prepost',
        ]);

        $prepost_all[] = $prepost->id;

        $prepost = Permission::create([
            'name' => 'Show prepost',
            'slug' => 'prepost.show',
            'description' => 'Un usuario puede Ver un Prepost',
        ]);

        $prepost_all[] = $prepost->id;

        $prepost = Permission::create([
            'name' => 'Create prepost',
            'slug' => 'prepost.create',
            'description' => 'Un usuario puede Crear un Prepost',
        ]);

        $prepost_all[] = $prepost->id;

        $prepost = Permission::create([
            'name' => 'Edit prepost',
            'slug' => 'prepost.edit',
            'description' => 'Un usuario puede Editar un Prepost',
        ]);

        $prepost_all[] = $prepost->id;

        $prepost = Permission::create([
            'name' => 'Destroy prepost',
            'slug' => 'prepost.destroy',
            'description' => 'Un usuario puede Destruir un Prepost',
        ]);

        $prepost_all[] = $prepost->id;
        //rechazos rechazos
        $rechazos = Permission::create([
            'name' => 'Index rechazos',
            'slug' => 'rechazos.index',
            'description' => 'Un usuario puede listar un Rechazos',
        ]);

        $rechazos_all[] = $rechazos->id;

        $rechazos = Permission::create([
            'name' => 'Show rechazos',
            'slug' => 'rechazos.show',
            'description' => 'Un usuario puede Ver un Rechazos',
        ]);

        $rechazos_all[] = $rechazos->id;

        $rechazos = Permission::create([
            'name' => 'Create rechazos',
            'slug' => 'rechazos.create',
            'description' => 'Un usuario puede Crear un Rechazos',
        ]);

        $rechazos_all[] = $rechazos->id;

        $rechazos = Permission::create([
            'name' => 'Edit rechazos',
            'slug' => 'rechazos.edit',
            'description' => 'Un usuario puede Editar un Rechazos',
        ]);

        $rechazos_all[] = $rechazos->id;

        $rechazos = Permission::create([
            'name' => 'Destroy rechazos',
            'slug' => 'rechazos.destroy',
            'description' => 'Un usuario puede Destruir un Rechazos',
        ]);

        $rechazos_all[] = $rechazos->id;


        /*$permission = Permission::create([
            'name' => 'Create user',
            'slug' => 'user.create',
            'description' => 'A user can create user',
        ]);

        $permission_all[] = $permission->id;
        */

        //table permission_role
        //$roladmin->permissions()->sync( $permission_all);





    }
}
