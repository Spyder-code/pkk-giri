<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Desa Sukolilo Kecamatan Wajak',
            'email' => 'admin@yahoo.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
