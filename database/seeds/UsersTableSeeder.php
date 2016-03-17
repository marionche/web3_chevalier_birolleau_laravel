<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Models\User::truncate(); // Vide la base de donnees
		
		factory(\App\Models\User::class, 20)->create(); // Creer 20 utilisateurs
    }
}
