<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'elliana', 'email' => 'admin@dan.com', 'password' => bcrypt('qwerty'), 'created_at' => \Carbon\Carbon::now()],
        ]);
    }
}
