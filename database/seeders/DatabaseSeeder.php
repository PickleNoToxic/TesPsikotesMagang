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
        DB::table('master_web')->insert([
            [
                'number_of_questions_iq_test' => 50,
                'number_of_questions_personality_test' => 50,
                'iq_test_duration' => 30,
                'personality_test_duration' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            [
                'fullname' => 'Admin 01',
                'email' => 'admin@gmail.com',
                'whatsapp' => '1234567890',
                'birthday' => Carbon::parse('1990-05-15')->format('Y-m-d'),
                'gender' => 'Pria',
                'address' => '123 Main Street, Jakarta',
                'position' => 'Developer',
                'score_iq' => 0, 
                'score_personality' => 0,
                'is_admin' => true,
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fullname' => 'Budi',
                'email' => 'budi@gmail.com',
                'whatsapp' => '9876543210',
                'birthday' => Carbon::parse('1995-07-20')->format('Y-m-d'),
                'gender' => 'Wanita',
                'address' => '456 Elm Street, Surabaya',
                'position' => 'Designer',
                'score_iq' => 0, 
                'score_personality' => 0,
                'is_admin' => false,
                'password' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        for($i = 0; $i < 50; $i++) {
            DB::table('inteligence_quotient_test')->insert([
                'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt soluta unde distinctio dignissimos perferendis laboriosam sit incidunt consectetur vero. Hic, molestiae at laudantium aspernatur aperiam in veniam magnam ad vero expedita, ratione laborum est beatae accusantium eum quos amet! Maxime vitae temporibus, enim autem facere neque quaerat officiis? Quo, voluptas. '.($i+1),
                'option_1' => 'Option 1',
                'option_2' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa iusto earum ipsam. Ipsum maxime sequi non? Nobis nostrum at fugiat?',
                'option_3' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit voluptatibus dolorum est, eos molestiae in, mollitia dolorem voluptate doloremque harum libero maiores perferendis? Quia doloribus earum eligendi labore veritatis.',
                'option_4' => 'Option 4',
                'correct_answer' => rand(1,4),
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } 

        for($i = 0; $i < 50; $i++) {
            DB::table('personality_test')->insert([
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
