<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            // 3 Dokter
            [
                'nama' => 'Dr. Reno',
                'alamat' => 'Yogyakarta',
                'no_hp' => '091273097123',
                'id_poli' => 1,
                'email' => 'reno@gmail.com',
                'password' => Hash::make('reno123'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Dr. Josua',
                'alamat' => 'Surabaya',
                'no_hp' => '12903871203',
                'id_poli' => 2,
                'email' => 'josua@gmail.com',
                'password' => Hash::make('josua123'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Dr. Nicho',
                'alamat' => 'Malang',
                'no_hp' => '09182370123231',
                'id_poli' => 3,
                'email' => 'nicho@gmail.com',
                'password' => Hash::make('nicho123'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],

            // 3 Admin
            [
                'nama' => 'Admin Satu',
                'alamat' => 'Bekasi',
                'no_hp' => '09821370918723',
                'email' => 'adminsatu@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Admin Dua',
                'alamat' => 'Depok',
                'no_hp' => '0912389071233',
                'email' => 'admindua@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Admin Tiga',
                'alamat' => 'Bogor',
                'no_hp' => '0912730987123',
                'email' => 'admintiga@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],

            // 3 Pasien
            [
                'nama' => 'nicholas',
                'alamat' => 'Solo',
                'no_hp' => '08123123123098',
                'email' => 'nicholas123@gmail.com',
                'password' => Hash::make('nicholas123'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000001',
                'no_rm' => 'RM00001',
            ],
            [
                'nama' => 'joko',
                'alamat' => 'Semarang',
                'no_hp' => '0812338747428',
                'email' => 'joko@gmail.com',
                'password' => Hash::make('pasien123'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000002',
                'no_rm' => 'RM00002',
            ],
            [
                'nama' => 'budiman',
                'alamat' => 'Tegal',
                'no_hp' => '08192387093',
                'email' => 'budiman@gmail.com',
                'password' => Hash::make('pasien123'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000003',
                'no_rm' => 'RM00003',
            ],
        ]);
    }
}
