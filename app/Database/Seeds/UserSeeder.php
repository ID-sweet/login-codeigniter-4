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
                "name" => "Irsyad Maulana",
                "email" => "irsyadm668@gmail.com",
                "phone_no" => "085701012743",
                "role" => "admin",
                "password" => password_hash("ilengpengeran1", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Swot",
                "email" => "swot10000@gmail.com",
                "phone_no" => "987247820479",
                "role" => "editor",
                "password" => password_hash("12345678", PASSWORD_DEFAULT)
            ]
        ]);
    }
}