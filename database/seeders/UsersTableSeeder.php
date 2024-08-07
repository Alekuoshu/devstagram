<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alejandro Villegas',
                'username' => 'koshucasweb',
                'email' => 'Alekuoshu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ikzB7oZhC8p9QQGL0zkjFenei7hFwOnSul19CZEnSw4M.culZ4F/K',
                'imagen' => '1_82643078-59e7-4e36-bb44-97905167f867.png',
                'remember_token' => 'ibS9z1USRktMNCF7uhgD3fgk1FHDymAYW7N1a9C20mUK19j2jiY0X4XBtHDu',
                'created_at' => '2024-07-18 18:29:32',
                'updated_at' => '2024-07-31 05:30:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Wushu',
                'username' => 'wushu',
                'email' => 'wushu@wushu.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IhzDbhDwj6ZoXJqfJ5BjnO2e.5MBzcwPuLCOdQBnaJBgT0A3qPbEK',
                'imagen' => '2_1c5b4ba1-6e91-4fde-83c4-cc61ffc30372.jpg',
                'remember_token' => NULL,
                'created_at' => '2024-07-18 20:04:12',
                'updated_at' => '2024-08-04 17:13:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mauricio V',
                'username' => 'mauvk2014',
                'email' => 'mauvk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q2/7pK9.M/d7MT4tvWiEAuWfFVXSzSyG6aYHcXL1w3Fz60yKV40SK',
                'imagen' => '3_41134340-d6f5-4636-b51c-8aa75980d9b5.jpg',
                'remember_token' => NULL,
                'created_at' => '2024-07-18 21:07:17',
                'updated_at' => '2024-08-04 17:54:46',
            ),
        ));
        
        
    }
}