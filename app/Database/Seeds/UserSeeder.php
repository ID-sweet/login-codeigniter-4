<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "phone_no" => "085111111111",
                "role" => "admin",
                "password" => password_hash("admin", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Editor",
                "email" => "Editor@gmail.com",
                "phone_no" => "085222222222",
                "role" => "editor",
                "password" => password_hash("editor", PASSWORD_DEFAULT)
            ]
        ]);
    }
}
