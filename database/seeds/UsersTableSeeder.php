<?php

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
                'role_id' => 1,
                'name' => 'Manoah',
                'email' => 'verdier.developpement@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AJVp.SZxz5PsuoCrf54wL.8/vqU87rX0ZAQaXbC6wiGsrY0QKd9ba',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-05 14:54:03',
                'updated_at' => '2020-08-05 14:54:03',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Vincent Mogenet',
                'email' => 'vmogenet@cyn-communication.fr',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q4fiVsBiynwMhSvcqCzDFexI8IYafSA58wOAl/MKo5zdGT58ldIJu',
                'remember_token' => 'TvoZ9dIi0fp4pvEPlb3vTDNiMEqBczWk5OMfOlvHl25eyXpVgANpTTvJ6b2q',
                'settings' => '{"locale":"fr"}',
                'created_at' => '2020-08-07 16:57:10',
                'updated_at' => '2020-08-07 16:57:10',
            ),
        ));
        
        
    }
}