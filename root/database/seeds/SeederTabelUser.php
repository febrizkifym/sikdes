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
            'username' => 'admin',
            'email' => 'adminsikdes@gmail.com',
            'tipe' => '2',
            'password' => bcrypt('adminsikdes123')
        ]);
    }
}
