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
            'content' => 'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                        así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.',
        ]);

        DB::table('notes')->insert([
            'title' => 'Instalación de Laravel',
            'content' => File::get(__DIR__.'/notes/installation.html')
        ]);
    }
}
