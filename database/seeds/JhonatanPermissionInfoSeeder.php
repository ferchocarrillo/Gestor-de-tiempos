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

       //ciclos ciclos
       $ciclos = Permission::create([
        'name' => 'Index ciclos',
        'slug' => 'ciclo.index',
        'description' => 'Un usuario puede listar un ciclos',
    ]);

    $ciclos_all[] = $ciclos->id;

    $ciclos = Permission::create([
        'name' => 'Create ciclos',
        'slug' => 'ciclo.create',
        'description' => 'Un usuario puede Crear un ciclos',
    ]);

    $ciclos_all[] = $ciclos->id;

    $ciclos = Permission::create([
        'name' => 'Edit ciclos',
        'slug' => 'ciclo.edit',
        'description' => 'Un usuario puede Editar un ciclos',
    ]);

//ciclos averia

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Averia',
'slug' => 'cicloaveria.edit',
'description' => 'Un usuario puede Editar inicio de averia',
]);

//ciclos averia out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Averia',
    'slug' => 'cicloaveriaout.edit',
    'description' => 'Un usuario puede Editar fin de averia',
]);

//ciclos break

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Break',
'slug' => 'ciclobreakin.edit',
'description' => 'Un usuario puede Editar inicio de break',
]);

//ciclos break out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Break',
    'slug' => 'ciclobreakout.edit',
    'description' => 'Un usuario puede Editar fin de break',
]);

//ciclos capa

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Capacitacion',
'slug' => 'ciclocapa.edit',
'description' => 'Un usuario puede Editar inicio de capa',
]);

//ciclos capa out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Capacitacion',
    'slug' => 'ciclocapout.edit',
    'description' => 'Un usuario puede Editar fin de capa',
]);

//ciclos evaluacion

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Evaluacion',
'slug' => 'cicloeva.edit',
'description' => 'Un usuario puede Editar inicio de evaluacion',
]);

//ciclos evaluacion out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Evaluacion',
    'slug' => 'cicloevaout.edit',
    'description' => 'Un usuario puede Editar fin de evaluacion',
]);

//ciclos lunch

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Almuerzo',
'slug' => 'ciclolunch.edit',
'description' => 'Un usuario puede Editar inicio de lunch',
]);

//ciclos lunch out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Almuerzo',
    'slug' => 'ciclolunchout.edit',
    'description' => 'Un usuario puede Editar fin de lunch',
]);

//ciclos pausas

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Pausas',
'slug' => 'ciclopausas.edit',
'description' => 'Un usuario puede Editar inicio de pausas',
]);

//ciclos pausas out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Pausas',
    'slug' => 'ciclopausasout.edit',
    'description' => 'Un usuario puede Editar fin de pausas',
]);

//ciclos retro

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Retro',
'slug' => 'cicloretro.edit',
'description' => 'Un usuario puede Editar inicio de retro',
]);

//ciclos retro out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Retro',
    'slug' => 'cicloretroout.edit',
    'description' => 'Un usuario puede Editar fin de retro',
]);


//ciclos reunion

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'Edit Inicio Reunion',
'slug' => 'cicloreunion.edit',
'description' => 'Un usuario puede Editar inicio de reunion',
]);

//ciclos reunion out

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin Reunion',
    'slug' => 'cicloreunionout.edit',
    'description' => 'Un usuario puede Editar fin de reunion',
]);
//ciclos salida

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
    'name' => 'Edit Fin turno',
    'slug' => 'ciclosalida.edit',
    'description' => 'Un usuario puede Editar fin de salida',
]);


//historico

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'index historico',
'slug' => 'historico.index',
'description' => 'Un usuario puede indexxar datos historicos',
]);

//personal general

$ciclos_all[] = $ciclos->id;

$ciclos = Permission::create([
'name' => 'index personal general',
'slug' => 'personalgeneral.index',
'description' => 'Un usuario puede indexxar datos personal general',
]);







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
