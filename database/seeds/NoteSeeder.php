<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'title' => '¿Para qué sirve Composer?',
            'content' => '<p>Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                        así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.</p>',
        ]);

        DB::table('notes')->insert([
            'title' => 'Instalación de Laravel',
            'content' => File::get(__DIR__.'/notes/installation.html')
        ]);

        DB::table('notes')->insert([
            'title' => 'Rutas y JSON',
            'content' => File::get(__DIR__.'/notes/routes-and-json.html')
        ]);

        DB::table('notes')->insert([
            'title' => 'Front Controller',
            'content' => '<p>Front Controller es un patrón de arquitectura donde un controlador
                        maneja todas las solicitudes o peticiones a un sitio web.</p>',
        ]);

        DB::table('notes')->insert([
            'title' => 'Cambia el formato de parámetros dinámicos',
            'content' => File::get(__DIR__.'/notes/route-parameter-constraints.html')
        ]);
    }
}
