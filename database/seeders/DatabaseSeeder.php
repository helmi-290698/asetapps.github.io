<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use App\Models\Status;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        Category::create([
            "nama_type" => "Fisik",
            "slug" => "perkakas",
            "nama_kategory" => "Perkakas",
        ]);

        Category::create([
            "nama_type" => "Fisik",
            "slug" => "kabel",
            "nama_kategory" => "Kabel",
        ]); 

        Category::create([
            "nama_type" => "Fisik",
            "slug" => "perangkat-kerja",
            "nama_kategory" => "Perangkat Kerja ",
        ]);

        Category::create([
            "nama_type" => "Virtual",
            "slug" => "domain",
            "nama_kategory" => "Domain",
        ]);

        Category::create([
            "nama_type" => "Virtual",
            "slug" => "shared-hosting",
            "nama_kategory" => "Shared Hosting",
        ]);

        Category::create([
            "nama_type" => "Virtual",
            "slug" => "ssh",
            "nama_kategory" => "SSH",
        ]);

        Category::create([
            "nama_type" => "Virtual",
            "slug" => "hosting",
            "nama_kategory" => "Hosting",
        ]);

        Status::create([
            "nama_type" => "Virtual",
            "slug" => "expired",
            "nama_status" => "Expired",
        ]);

        Status::create([
            "nama_type" => "Virtual",
            "slug" => "pending-delete",
            "nama_status" => "Pending Delete",
        ]);

        Status::create([
            "nama_type" => "Virtual",
            "slug" => "aktif",
            "nama_status" => "Aktif",
        ]);

        Status::create([
            "nama_type" => "Fisik",
            "slug" => "ada",
            "nama_status" => "Ada",
        ]);

        Status::create([
            "nama_type" => "Fisik",
            "slug" => "rusak",
            "nama_status" => "Rusak",
        ]);

        Status::create([
            "nama_type" => "Fisik",
            "slug" => "dipinjam",
            "nama_status" => "Dipinjam",
        ]);

      User::create([
            "name" => "Helmi paturohman",
            "email" => "helmipaturohman69@gmail.com",
            "role" => "admin",
            "lembaga" => "itop",
            "password" => Hash::make("nodisplay21"),
      ]);

       
    }
}
