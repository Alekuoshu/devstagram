<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comentarios')->delete();
        
        \DB::table('comentarios')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'post_id' => 11,
                'comentario' => 'codigo y mas naaaa',
                'created_at' => '2024-07-30 02:10:59',
                'updated_at' => '2024-07-30 02:10:59',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'post_id' => 4,
                'comentario' => 'este es un comentario',
                'created_at' => '2024-07-30 21:50:35',
                'updated_at' => '2024-07-30 21:50:35',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'post_id' => 12,
                'comentario' => 'que way',
                'created_at' => '2024-07-31 01:40:21',
                'updated_at' => '2024-07-31 01:40:21',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'post_id' => 4,
                'comentario' => 'me encanta esto',
                'created_at' => '2024-07-31 01:41:09',
                'updated_at' => '2024-07-31 01:41:09',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'post_id' => 12,
                'comentario' => 'genial bro',
                'created_at' => '2024-07-31 01:58:34',
                'updated_at' => '2024-07-31 01:58:34',
            ),
            5 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'post_id' => 13,
                'comentario' => 'Super, gracias por confiar en nosotros',
                'created_at' => '2024-07-31 05:35:01',
                'updated_at' => '2024-07-31 05:35:01',
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'post_id' => 14,
                'comentario' => 'como siempre el',
                'created_at' => '2024-08-04 15:14:21',
                'updated_at' => '2024-08-04 15:14:21',
            ),
            7 => 
            array (
                'id' => 9,
                'user_id' => 3,
                'post_id' => 13,
                'comentario' => 'de nada',
                'created_at' => '2024-08-04 17:55:21',
                'updated_at' => '2024-08-04 17:55:21',
            ),
            8 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'post_id' => 15,
                'comentario' => 'hola como te fue con este post?',
                'created_at' => '2024-08-04 22:45:03',
                'updated_at' => '2024-08-04 22:45:03',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'post_id' => 15,
                'comentario' => 'genial, gracias',
                'created_at' => '2024-08-04 22:45:41',
                'updated_at' => '2024-08-04 22:45:41',
            ),
            10 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'post_id' => 12,
                'comentario' => 'super',
                'created_at' => '2024-08-04 22:46:13',
                'updated_at' => '2024-08-04 22:46:13',
            ),
            11 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'post_id' => 16,
                'comentario' => 'probando los comentarios',
                'created_at' => '2024-08-05 19:30:13',
                'updated_at' => '2024-08-05 19:30:13',
            ),
            12 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'post_id' => 16,
                'comentario' => 'quedaron nice',
                'created_at' => '2024-08-05 19:30:21',
                'updated_at' => '2024-08-05 19:30:21',
            ),
            13 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'post_id' => 6,
                'comentario' => 'nueva imagen señores tenemos',
                'created_at' => '2024-08-05 20:27:28',
                'updated_at' => '2024-08-05 20:27:28',
            ),
        ));
        
        
    }
}