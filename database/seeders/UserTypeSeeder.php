<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $adminusertype = new UserType();
        $adminusertype -> user_type = "Admin";
        $adminusertype ->save();

        $categoryusertype = new UserType();
        $categoryusertype -> user_type = "Category Admin";
        $categoryusertype ->save();
        
        $normalusertype = new UserType();
        $normalusertype -> user_type = "Normal User";
        $normalusertype ->save();


    }
}
