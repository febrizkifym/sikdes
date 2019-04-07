<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SeederTabelUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'tipe' => '1',
            'password' => bcrypt('user123')
        ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'tipe' => '2',
            'password' => bcrypt('admin123')
        ]);
    }
}
