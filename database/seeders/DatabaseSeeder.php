<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => 'password',
            ]
        );

        $kasirRole = Role::firstOrCreate(
            ['nama_peran' => 'Kasir'],
            [
                'deskripsi' => 'Menangani transaksi pembayaran tamu di halaman Kasir',
                'status' => true,
            ]
        );

        User::firstOrCreate(
            ['email' => 'kasir@surveihotel.test'],
            [
                'name' => 'Kasir SurveiHotel',
                'password' => 'kasir123',
                'role_id' => $kasirRole->id,
                'status' => true,
            ]
        );
    }
}