<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'post_id' => 1,
                'created_at' => '2024-07-31 01:37:17',
                'updated_at' => '2024-07-31 01:37:17',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'post_id' => 10,
                'created_at' => '2024-07-31 01:41:26',
                'updated_at' => '2024-07-31 01:41:26',
            ),
            2 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'post_id' => 13,
                'created_at' => '2024-07-31 05:34:46',
                'updated_at' => '2024-07-31 05:34:46',
            ),
            3 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'post_id' => 5,
                'created_at' => '2024-08-04 15:14:01',
                'updated_at' => '2024-08-04 15:14:01',
            ),
            4 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'post_id' => 15,
                'created_at' => '2024-08-04 17:14:36',
                'updated_at' => '2024-08-04 17:14:36',
            ),
            5 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'post_id' => 4,
                'created_at' => '2024-08-05 17:33:12',
                'updated_at' => '2024-08-05 17:33:12',
            ),
            6 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'post_id' => 12,
                'created_at' => '2024-08-05 17:38:22',
                'updated_at' => '2024-08-05 17:38:22',
            ),
            7 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'post_id' => 16,
                'created_at' => '2024-08-05 19:30:29',
                'updated_at' => '2024-08-05 19:30:29',
            ),
            8 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'post_id' => 6,
                'created_at' => '2024-08-05 20:27:40',
                'updated_at' => '2024-08-05 20:27:40',
            ),
        ));
        
        
    }
}