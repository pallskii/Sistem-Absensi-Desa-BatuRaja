<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin123"),
            "role" => "admin",
        ]);

        User::insert([
            [
                "name" => "AHMAD.S.Sos",
                "email" => "ahmad.s.sos@gmail.com",
                "password" => bcrypt("ahmad123"),
            ],
            [
                "name" => "HANDOKO NUGROHO",
                "email" => "handoko.nugroho@gmail.com",
                "password" => bcrypt("handoko123"),
            ],
            [
                "name" => "BUDI SETIO PURNOMO",
                "email" => "budi.setio@gmail.com",
                "password" => bcrypt("budi123"),
            ],
            [
                "name" => "WAHYONO",
                "email" => "wahyono@gmail.com",
                "password" => bcrypt("wahyono123"),
            ],
            [
                "name" => "RUSDI SANJAYA",
                "email" => "rusdi.sanjaya@gmail.com",
                "password" => bcrypt("rusdi123"),
            ],
            [
                "name" => "NURUL HIDAYATI",
                "email" => "nurul.hidayati@gmail.com",
                "password" => bcrypt("nurul123"),
            ],
            [
                "name" => "AZIS ISMANTO",
                "email" => "azis.ismanto@gmail.com",
                "password" => bcrypt("azis123"),
            ],
            [
                "name" => "ABDUL KARIM",
                "email" => "abdul.karim@gmail.com",
                "password" => bcrypt("abdul123"),
            ],
            [
                "name" => "HANUT WAHONO",
                "email" => "hanut.wahono@gmail.com",
                "password" => bcrypt("hanut123"),
            ],
            [
                "name" => "ANDITIA",
                "email" => "anditia@gmail.com",
                "password" => bcrypt("anditia123"),
            ],
            [
                "name" => "HERU PURNOMO",
                "email" => "heru.purnomo@gmail.com",
                "password" => bcrypt("heru123"),
            ],
            [
                "name" => "AHMAD ZAKARIA",
                "email" => "ahmad.zakaria@gmail.com",
                "password" => bcrypt("zaka123"),
            ],
            [
                "name" => "TUMIN",
                "email" => "tumin@gmail.com",
                "password" => bcrypt("tumin123"),
            ],
            [
                "name" => "WAHYUDI",
                "email" => "wahyudi@gmail.com",
                "password" => bcrypt("wahyudi123"),
            ],
        ]);
    }
}
