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
      DB::table('users')->insert([
          'name' => 'Administrator',
          'email' => 'azwanhalim@gmail.com',
          'password' => bcrypt('wan'),
          'user_group'=> 'admin',
          'created_at'=> \Carbon\Carbon::now(),
      ]);
    }

    DB::table('users')->insert([
        'name' => 'Customer',
        'email' => 'azwan@gmail.com',
        'password' => bcrypt('wan'),
        'user_group'=> 'customer',
        'created_at'=> \Carbon\Carbon::now(),
    ]);
  }
}
