<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrateur',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Utilisateur standard',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'webmaster',
                'display_name' => 'Webmaster',
                'created_at' => '2020-08-07 16:55:12',
                'updated_at' => '2020-08-07 16:55:12',
            ),
        ));
        
        
    }
}