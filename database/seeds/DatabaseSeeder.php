<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $user = factory(App\User::class)->create([
             'nombre' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'codigo' => '1151241'
         ]);
    }
}