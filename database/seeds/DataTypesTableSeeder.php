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
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2020-06-29 09:20:53',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2020-06-29 09:20:53',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2020-06-29 09:20:53',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2020-06-29 09:20:53',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-06-29 09:21:56',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Formations',
                'display_name_singular' => 'Formation',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 4,
                'model_name' => 'App\\Formation',
                'name' => 'formations',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'formations',
                'updated_at' => '2020-08-19 07:46:01',
            ),
            4 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-08-07 16:53:41',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Categories',
                'display_name_singular' => 'Category',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 6,
                'model_name' => 'App\\Categorie',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            5 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-08-07 16:54:01',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Faqs',
                'display_name_singular' => 'Faq',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 8,
                'model_name' => 'App\\Faq',
                'name' => 'faqs',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'faqs',
                'updated_at' => '2022-06-16 12:39:09',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-08-07 16:54:10',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Pages',
                'display_name_singular' => 'Page',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 9,
                'model_name' => 'App\\Page',
                'name' => 'pages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'pages',
                'updated_at' => '2022-06-16 12:16:08',
            ),
            7 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-08-07 16:54:28',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Sous Categories',
                'display_name_singular' => 'Sous Category',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 10,
                'model_name' => 'App\\SousCategorie',
                'name' => 'sous_categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'sous-categories',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            8 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-08-07 16:54:36',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Temoignages',
                'display_name_singular' => 'Temoignage',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 11,
                'model_name' => 'App\\Temoignage',
                'name' => 'temoignages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'temoignages',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            9 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-08-07 17:03:07',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Conseils',
                'display_name_singular' => 'Conseil',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 12,
                'model_name' => 'App\\Conseil',
                'name' => 'conseils',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'conseils',
                'updated_at' => '2020-08-13 09:37:08',
            ),
            10 => 
            array (
                'controller' => '\\App\\Http\\Controllers\\HomepageController',
                'created_at' => '2022-06-14 14:04:18',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Réglages généraux',
                'display_name_singular' => 'Réglages généraux',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 15,
                'model_name' => 'App\\Homepage',
                'name' => 'homepages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'homepages',
                'updated_at' => '2022-06-23 07:31:01',
            ),
            11 => 
            array (
                'controller' => NULL,
                'created_at' => '2022-06-16 12:04:37',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Page Produits',
                'display_name_singular' => 'Page Produit',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 17,
                'model_name' => 'App\\PageProduit',
                'name' => 'page_produits',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'page-produits',
                'updated_at' => '2022-06-23 07:25:08',
            ),
        ));
        
        
    }
}