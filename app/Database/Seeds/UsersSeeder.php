<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10 ; $i++) {
             $data = [
                'username' => $faker->userName,
                'email'    => $faker->freeEmail,
                'password' => $faker->password,
                'phone'    => $faker->e164PhoneNumber,
                'level'    => $faker->jobTitle,
                'image'    => $faker->image,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now()
            ];
        };
       

        $this->db->table('user')->insertBatch($data);
        // Simple Queries
        // $this->db->query('INSERT INTO users (id, username, email, password, phone, level, image, created_at, updated_at) VALUES(:id:, :username:, :email:, :password:, :phone:, :level:, :image:, :created_at:, :updated_at:)', $data);

        // Using Query Builder


        // $this->db->table('users')->insertBatch($data);
    }
}