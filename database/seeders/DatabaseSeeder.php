<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\RekamMedis;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ananda',
            'email' => 'admin@annd.dev',
            'password' => bcrypt('password')
        ]);
        Pasien::create([
            'nama' => "Ananda"
        ]);
        Pasien::create([
            'nama' => "John"
        ]);
        Pasien::create([
            'nama' => "Sue"
        ]);
        Pasien::create([
            'nama' => "AjeAje"
        ]);
        Pasien::create([
            'nama' => "Timotius"
        ]);



        Dokter::create([
            'nama' => "Erki"
        ]);
        Dokter::create([
            'nama' => "Aqua"
        ]);
        Dokter::create([
            'nama' => "Pestily"
        ]);
        Dokter::create([
            'nama' => "Joe"
        ]);
    }
}
