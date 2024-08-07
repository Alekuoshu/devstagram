<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'titulo' => 'Primer curso',
                'descripcion' => 'este es una pequeña prueba',
                'imagen' => '1_c019a80a-3445-408b-ba0c-886c21dae656.jpg',
                'created_at' => '2024-07-23 14:49:20',
                'updated_at' => '2024-07-23 14:49:20',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'titulo' => 'Programación Orientada a Objetos',
                'descripcion' => 'Que maravilla de curso es este',
                'imagen' => '1_6ca1207c-705e-4170-a2ed-46d5e3c0842e.jpg',
                'created_at' => '2024-07-24 02:35:10',
                'updated_at' => '2024-07-24 02:35:10',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'titulo' => 'Matrix Return',
                'descripcion' => 'Una nueva secuela se viene este año',
                'imagen' => '1_0c6451b9-dffb-4a60-9f08-f136cd143732.jpg',
                'created_at' => '2024-07-24 02:41:28',
                'updated_at' => '2024-07-24 02:41:28',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'titulo' => 'Big Data',
                'descripcion' => 'Nuevo curso sobre el big data, conoce todo sobre él.',
                'imagen' => '1_d304f41c-8a3e-459e-a2df-e62de158272f.jpg',
                'created_at' => '2024-07-24 02:42:17',
                'updated_at' => '2024-07-24 02:42:17',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'titulo' => 'Nueva Imagen',
                'descripcion' => 'ahora es que hay es genea',
                'imagen' => '1_24d43438-7c4b-41d5-bcd5-c83596f825ca.jpg',
                'created_at' => '2024-07-24 02:43:43',
                'updated_at' => '2024-07-24 02:43:43',
            ),
            5 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'titulo' => 'Lo nuevo',
                'descripcion' => 'se viene lo bueno',
                'imagen' => '1_b68bd474-3d21-4275-a0de-e6ad7d9a91c8.jpg',
                'created_at' => '2024-07-24 02:44:11',
                'updated_at' => '2024-07-24 02:44:11',
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'titulo' => 'Que mas te da',
                'descripcion' => 'Desde el primer momento que te vi...',
                'imagen' => '1_0ce03b0e-2974-4f08-9d96-c03f501b0a18.jpg',
                'created_at' => '2024-07-24 02:45:04',
                'updated_at' => '2024-07-24 02:45:04',
            ),
            7 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'titulo' => 'Open Mine',
                'descripcion' => 'This is just a simple tuto',
                'imagen' => '1_3789c5e3-5742-4ef3-b942-07adc1c971bd.jpg',
                'created_at' => '2024-07-27 03:00:26',
                'updated_at' => '2024-07-27 03:00:26',
            ),
            8 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'titulo' => 'Primeros Pasos para Aprender',
                'descripcion' => 'Aprendiendo con juan, siempre sera lo mejor',
                'imagen' => '1_2c0ccbc9-c9b2-4c45-8c37-4f450259d575.jpg',
                'created_at' => '2024-07-30 02:10:44',
                'updated_at' => '2024-07-30 02:10:44',
            ),
            9 => 
            array (
                'id' => 12,
                'user_id' => 3,
                'titulo' => 'Entrenimiento Musical',
                'descripcion' => 'Esto es un curso nuevo',
                'imagen' => '3_78e9f80c-4c60-4e6a-a1bd-1fc362864888.jpg',
                'created_at' => '2024-07-31 01:40:01',
                'updated_at' => '2024-07-31 01:40:01',
            ),
            10 => 
            array (
                'id' => 13,
                'user_id' => 3,
                'titulo' => 'KoshucasWeb',
                'descripcion' => 'Quiero recomendar a los manes de koshucas son lo maximo que hay para paginas web',
                'imagen' => '3_4a466e1c-53f7-49b6-9035-d0519d52bf65.png',
                'created_at' => '2024-07-31 05:34:16',
                'updated_at' => '2024-07-31 05:34:16',
            ),
            11 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'titulo' => 'Ingenio',
                'descripcion' => 'Hoy tendremos esto',
                'imagen' => '1_7abc4c8b-ade3-45fe-887b-c56e8dbe54e5.jpg',
                'created_at' => '2024-07-31 06:02:22',
                'updated_at' => '2024-07-31 06:02:22',
            ),
            12 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'titulo' => 'Mejorando la web',
                'descripcion' => 'esto es otra prueba mas',
                'imagen' => '2_29922b6d-608d-423f-ae28-608e11533800.jpg',
                'created_at' => '2024-08-04 17:14:29',
                'updated_at' => '2024-08-04 17:14:29',
            ),
            13 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'titulo' => 'Escuchando musica',
                'descripcion' => 'Aqui escuchando un poco de musica y ustedes?',
                'imagen' => '2_aa1ee29d-94ee-4ad4-9880-5458aaeed49f.jpg',
                'created_at' => '2024-08-04 22:47:46',
                'updated_at' => '2024-08-04 22:47:46',
            ),
        ));
        
        
    }
}