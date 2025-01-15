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
                'score_iq' => 0, 
                'is_admin' => true,
                'password' => bcrypt('12345'),
            ],
            [
                'fullname' => 'Budi',
                'email' => 'budi@gmail.com',
                'whatsapp' => '9876543210',
                'birthday' => Carbon::parse('1995-07-20')->format('Y-m-d'),
                'gender' => 'Female',
                'address' => '456 Elm Street, Surabaya',
                'position' => 'Designer',
                'score_iq' => 0, 
                'is_admin' => false,
                'password' => null,
            ],
        ]);

        for($i = 0; $i < 50; $i++) {
            DB::table('inteligence_quotient_test')->insert([
                'question' => 'Question '.($i+1),
                'option_1' => 'Option 1',
                'option_2' => 'Option 2',
                'option_3' => 'Option 3',
                'option_4' => 'Option 4',
                'correct_answer' => rand(1,4),
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } 
    }
}
