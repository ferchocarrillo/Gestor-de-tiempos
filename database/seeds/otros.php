
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

