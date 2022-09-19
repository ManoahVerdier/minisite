<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-06-29 09:20:53',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'formations',
                'slug' => 'formations',
                'display_name_singular' => 'Formation',
                'display_name_plural' => 'Formations',
                'icon' => NULL,
                'model_name' => 'App\\Formation',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-29 09:21:56',
                'updated_at' => '2020-08-19 07:46:01',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => NULL,
                'model_name' => 'App\\Categorie',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'faqs',
                'slug' => 'faqs',
                'display_name_singular' => 'Faq',
                'display_name_plural' => 'Faqs',
                'icon' => NULL,
                'model_name' => 'App\\Faq',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2020-08-07 16:54:01',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => NULL,
                'model_name' => 'App\\Page',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-08-07 16:54:10',
                'updated_at' => '2022-06-14 11:32:27',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'sous_categories',
                'slug' => 'sous-categories',
                'display_name_singular' => 'Sous Category',
                'display_name_plural' => 'Sous Categories',
                'icon' => NULL,
                'model_name' => 'App\\SousCategorie',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-07 16:54:28',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'temoignages',
                'slug' => 'temoignages',
                'display_name_singular' => 'Temoignage',
                'display_name_plural' => 'Temoignages',
                'icon' => NULL,
                'model_name' => 'App\\Temoignage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-07 16:54:36',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'conseils',
                'slug' => 'conseils',
                'display_name_singular' => 'Conseil',
                'display_name_plural' => 'Conseils',
                'icon' => NULL,
                'model_name' => 'App\\Conseil',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-08-07 17:03:07',
                'updated_at' => '2020-08-13 09:37:08',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'homepages',
                'slug' => 'homepages',
                'display_name_singular' => 'Réglages généraux',
                'display_name_plural' => 'Réglages généraux',
                'icon' => NULL,
                'model_name' => 'App\\Homepage',
                'policy_name' => NULL,
                'controller' => '\\App\\Http\\Controllers\\HomepageController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-06-14 14:04:18',
                'updated_at' => '2022-06-14 14:13:01',
            ),
        ));
        
        
    }
}