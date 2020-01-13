<?php

use App\Note;
use Illuminate\Database\Seeder;
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
        Note::create([
            'title' => '¿Para qué sirve Composer?',
            'content' => '<p>Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                        así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.</p>',
        ]);

        Note::create([
            'title' => 'Instalación de Laravel',
            'content' => File::get(__DIR__.'/notes/installation.html')
        ]);

        Note::create([
            'title' => 'Rutas y JSON',
            'content' => File::get(__DIR__.'/notes/routes-and-json.html')
        ]);

        Note::create([
            'title' => 'Front Controller',
            'content' => '<p>Front Controller es un patrón de arquitectura donde un controlador
                        maneja todas las solicitudes o peticiones a un sitio web.</p>',
        ]);

        Note::create([
            'title' => 'Cambia el formato de parámetros dinámicos',
            'content' => File::get(__DIR__.'/notes/route-parameter-constraints.html')
        ]);
    }
}
