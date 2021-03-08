<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'hogehoge',
                'email' => 'coelacanth2505@gmail.com',
                'password' => Hash::make('children0525'),
            ], [
                'name' => 'gurarara',
                'email' => 'nocrycanary@gmail',
                'password' => Hash::make('children0525'),
            ]
        ]);
    }
}
