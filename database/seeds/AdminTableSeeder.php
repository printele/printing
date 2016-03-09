<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Admin::create([
           'name' => 'admin',
            'email' => 'admin@printele.com',
            'password' => Hash::make('1q2w3e4r5t6y')
        ]);
    }
}
