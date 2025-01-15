<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\Management;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Admin 01',
                'email' => 'admin@gmail.com',
                'whatsapp' => '1234567890',
                'birthday' => Carbon::parse('1990-05-15')->format('Y-m-d'),
                'gender' => 'Male',
                'address' => '123 Main Street, Jakarta',
                'position' => 'Developer',
                'is_admin' => true,
            ],
            [
                'fullname' => 'Budi',
                'email' => 'budi@gmail.com',
                'whatsapp' => '9876543210',
                'birthday' => Carbon::parse('1995-07-20')->format('Y-m-d'),
                'gender' => 'Female',
                'address' => '456 Elm Street, Surabaya',
                'position' => 'Designer',
                'is_admin' => false,
            ],
        ]);
    }
}
