<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */  
    public function run(): void
    {
        $normaluser = new User();
        $normaluser->name = 'Normal User';
        $normaluser->email = 'normaluser@gmail.com';
        $normaluser->password = Hash::make('admin');
        $normaluser->type = 0;
        $normaluser->save();

        $categoryadmin = new User();
        $categoryadmin->name = 'Category Admin';
        $categoryadmin->email = 'categoryadmin@gmail.com';
        $categoryadmin->password = Hash::make('admin');
        $categoryadmin->type = 1;
        $categoryadmin->save();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin');
        $admin->type = 2;
        $admin->save();

    }
}
