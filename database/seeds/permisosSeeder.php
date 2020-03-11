<?php

use Illuminate\Database\Seeder;

class permisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_permisos')->insert([
            'permiso'=>"Administrador de Usuarios",
            'descripcion'=>"Administra usuarios del sistema",
        ]);


        DB::table('cat_permisos')->insert([
            'permiso'=>"Módulo de Reportes RJG",
            'descripcion'=>"Mis reportes y ver reportes",
        ]);

        DB::table('cat_permisos')->insert([
            'permiso'=>"Módulo de Minutas RJG",
            'descripcion'=>"Mis minutas y ver minutas",
        ]);

        DB::table('cat_permisos')->insert([
            'permiso'=>"Módulo de Seguimiento de Reportes RJG",
            'descripcion'=>"Mis reportes de seguimiento y ver mis reportes de Seguimiento",
        ]);

        DB::table('cat_permisos')->insert([
            'permiso'=>"Seguimiento de Minutas RJG",
            'descripcion'=>"Seguimiento de Minutas y ver mi seguimiento de minutas",
        ]);

        DB::table('cat_permisos')->insert([
            'permiso'=>"Reportes Generales de Alcaldías",
            'descripcion'=>"Descarga Excel de Reportes de Alcaldias si el usuario es una Alcaldía",
        ]);

        DB::table('cat_permisos')->insert([
            'permiso'=>"Reportes Generales de los usuarios (C.T)",
            'descripcion'=>"Descargar Excel de Reportes de todas las C.T",
        ]);

        DB::table('cat_permisos')->insert([
            'permiso'=>" Módulo de Imagenes y pdfs",
            'descripcion'=>"Imagenes y pdfs",
        ]);

    }
}
