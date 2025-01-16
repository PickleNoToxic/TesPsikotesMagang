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
                'score_koleris' => 0,
                'score_phlegmatis' => 0,
                'score_sanguinis' => 0,
                'score_melankolis' => 0,
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
                'score_koleris' => 0,
                'score_phlegmatis' => 0,
                'score_sanguinis' => 0,
                'score_melankolis' => 0,
                'is_admin' => false,
                'password' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, angka berapakah yang muncul berikutnya? 4, 12, 20, 28, …. ',
            'option_1' => '32',
            'option_2' => '34',
            'option_3' => '36',
            'option_4' => '40',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 3, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Sepeda berkenaan dengan dikendarai, seperti mobil berkenaan dengan …. ',
            'option_1' => 'Dicuci',
            'option_2' => 'Diterbangkan',
            'option_3' => 'Dikemudikan',
            'option_4' => 'Dibeli',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 3, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Ikan asin berkenaan dengan garam, seperti minuman manis berkenaan dengan …. ',
            'option_1' => 'Budi',
            'option_2' => 'Gula',
            'option_3' => 'Pukulan',
            'option_4' => 'Air',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2,
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Replika artinya ... ',
            'option_1' => 'Tiruan',
            'option_2' => 'Arsitektur',
            'option_3' => 'Perancis',
            'option_4' => 'Plastik',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 1, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, angka berapakah yang muncul berikutnya? 1, 4, 8, 13, …. ',
            'option_1' => '16',
            'option_2' => '17',
            'option_3' => '18',
            'option_4' => '19',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 4, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam kelompok ini, kata apakah yang tidak termasuk? …. ',
            'option_1' => 'Pluto',
            'option_2' => 'Goofy',
            'option_3' => 'Uranus',
            'option_4' => 'Jupiter',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, angka berapakah yang muncul berikutnya? 2, 4, 8, 16, 32, …. ',
            'option_1' => '33',
            'option_2' => '48',
            'option_3' => '40',
            'option_4' => '64',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 4, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, huruf apakah yang muncul berikutnya? A, D, G, J, …. ',
            'option_1' => 'K',
            'option_2' => 'L',
            'option_3' => 'M',
            'option_4' => 'N',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 3, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Huruf apakah yang tidak termasuk dalam rangkaian ini? Q, P, O, N, X, M, …. ',
            'option_1' => 'P',
            'option_2' => 'O',
            'option_3' => 'M',
            'option_4' => 'X',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 4, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, angka berapakah yang muncul berikutnya? 1, 51, 17, 4, 101, … ',
            'option_1' => '6',
            'option_2' => '8',
            'option_3' => '9',
            'option_4' => '10',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 3, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, apakah yang muncul berikutnya? 3, Z, 10, Y, 6, X, 13, W, …. ',
            'option_1' => '9',
            'option_2' => '16',
            'option_3' => 'U',
            'option_4' => 'V',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 1,  
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Sebuah perahu selalu memiliki …. ',
            'option_1' => 'Aluminium',
            'option_2' => 'Berat',
            'option_3' => 'Layar',
            'option_4' => 'Ikan',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, angka berapakah yang tidak seharusnya ada? 1, 51, 17, 4, 101, …. ',
            'option_1' => '4',
            'option_2' => '17',
            'option_3' => '51',
            'option_4' => '101',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 1, // Jawaban yang benar adalah 4
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => '10 orang dapat mengecat 30 rumah dalam 60 hari, jadi 5 orang dapat mengecat 15 rumah dalam …. ',
            'option_1' => '15 hari',
            'option_2' => '30 hari',
            'option_3' => '60 hari',
            'option_4' => '120 hari',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 3, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, angka berapakah yang muncul berikutnya? 3, 7, 9, 8, 27, 5, …. ',
            'option_1' => '4',
            'option_2' => '19',
            'option_3' => '54',
            'option_4' => '81',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 4, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Jika semua kuda memiliki pelana, maka kuda tua memiliki…. ',
            'option_1' => 'Pelana tua',
            'option_2' => 'Pelana',
            'option_3' => 'Pelana besar',
            'option_4' => 'Tanpa pelana',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Dalam rangkaian ini, kata apakah yang tidak termasuk? ',
            'option_1' => 'Menjemukan',
            'option_2' => 'Membosankan',
            'option_3' => 'Letih',
            'option_4' => 'Melelahkan',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 3, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => '¿ adalah untuk ?, seperti ] adalah untuk: ',
            'option_1' => '{',
            'option_2' => '[',
            'option_3' => '¥',
            'option_4' => '>',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Kata-kata ini dapat disusun menjadi suatu kalimat. Benar atau salahkah kalimat ini? APAKAH SUSU DINGIN SELALU ',
            'option_1' => 'Benar',
            'option_2' => 'Salah',
            'option_3' => '¥',
            'option_4' => '>',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('inteligence_quotient_test')->insert([
            'question' => 'Kata-kata ini dapat disusun menjadi suatu kalimat. Benar atau salahkah kalimat ini? TIDAK PERNAH TIDUR ANJING BESAR ',
            'option_1' => 'Benar',
            'option_2' => 'Salah',
            'option_3' => '¥',
            'option_4' => '>',
            'option_5' => null,
            'option_6' => null,
            'correct_answer' => 2, 
            'score' => 1,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('inteligence_quotient_test')->insert([
            [
                'question' => 'Seberapa jauh seseorang bisa berlari dalam 6 menit jika ia berlari dengan sepertiga kecepatan mobil yang melaju 30 km/jam?',
                'option_1' => '1 km',
                'option_2' => '1,67 km',
                'option_3' => '3 km',
                'option_4' => '60 km',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 1,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Rangkaian di bawah ini adalah saling terbalik satu sama lain, kecuali huruf tertentu. Huruf manakah?',
                'option_1' => 'A',
                'option_2' => 'B',
                'option_3' => 'C',
                'option_4' => 'D',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 1,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Dalam suatu bulan, Senin adalah hari ke-21. Hari apakah yang merupakan hari pertama dalam bulan itu?',
                'option_1' => 'Sabtu',
                'option_2' => 'Minggu',
                'option_3' => 'Senin',
                'option_4' => 'Selasa',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Dalam kelompok ini, kata mana yang tidak termasuk?',
                'option_1' => 'Besar',
                'option_2' => 'Kuning',
                'option_3' => 'Plastik',
                'option_4' => 'Pisang',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Jika 2 titik membentuk garis, 3 titik membentuk ….',
                'option_1' => 'Gambar',
                'option_2' => 'Angka',
                'option_3' => 'Bidang',
                'option_4' => 'Huruf',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 3,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Jika semua ikan bisa berjalan, maka gurami bisa ….',
                'option_1' => 'Menari',
                'option_2' => 'Terbang',
                'option_3' => 'Berenang',
                'option_4' => 'Berjalan',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Sebuah penjelasan yang keliru adalah sesuatu yang ….',
                'option_1' => 'Mengganggu',
                'option_2' => 'Sahih',
                'option_3' => 'Salah',
                'option_4' => 'Perlu',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 3,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Apa yang akan muncul berikutnya dalam rangkaian ini? 1, A, 6, B, 4, C, 9, D, ….',
                'option_1' => '10',
                'option_2' => 'E',
                'option_3' => '5',
                'option_4' => '7',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Dua puluh persen dari 25 % x 20 adalah ….',
                'option_1' => '¼',
                'option_2' => '1',
                'option_3' => '4',
                'option_4' => '5',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Melancarkan sangat mirip artinya dengan ….',
                'option_1' => 'Memudahkan',
                'option_2' => 'Menghalangi',
                'option_3' => 'Mengeluarkan',
                'option_4' => 'Menjalankan',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 1,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('inteligence_quotient_test')->insert([
            [
                'question' => 'Binatang selalu memiliki ….',
                'option_1' => 'Rambut',
                'option_2' => 'Bayi/ anak',
                'option_3' => 'Makanan',
                'option_4' => 'Tubuh',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Rapi sangat mirip artinya dengan ….',
                'option_1' => 'Ringkas',
                'option_2' => 'Langsing',
                'option_3' => 'Tegang',
                'option_4' => 'Keras',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 1,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Jalan selalu memiliki ….',
                'option_1' => 'Garis',
                'option_2' => 'Lebar',
                'option_3' => 'Tegang',
                'option_4' => 'Keras',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Sapi berkenaan dengan anak rusa, seperti kuda berkenaan dengan ….',
                'option_1' => 'Kerbau',
                'option_2' => 'Kijang',
                'option_3' => 'Anak anjing',
                'option_4' => 'Sepeda motor',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 3,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Radio selalu memiliki ….',
                'option_1' => 'Musik',
                'option_2' => 'Lampu',
                'option_3' => 'Pegangan',
                'option_4' => 'Bentuk',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Berapa banyak angka antara 100 dan 300 yang diawali atau diakhiri dengan angka 2?',
                'option_1' => '20',
                'option_2' => '40',
                'option_3' => '100',
                'option_4' => '120',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Yonas sangat tegas dan tepat dalam berbicara, namun hari ini ucapannya ….',
                'option_1' => 'Bersemangat',
                'option_2' => 'Jelas',
                'option_3' => 'Datar',
                'option_4' => 'Tidak jelas',
                'option_5' => 'Merendahkan',
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Budi mendapat dua kali lipat bagian keuntungan dibandingkan yang didapat oleh tiga rekannya. Ketiga rekannya mendapat bagian yang sama. Berapa persen dari seluruh keuntungan yang Budi peroleh?',
                'option_1' => '25%',
                'option_2' => '40%',
                'option_3' => '50%',
                'option_4' => '66,67%',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Jika tidak ada anjing yang bisa terbang, tetapi beberapa anjing bisa bernyanyi, maka ….',
                'option_1' => 'Beberapa anjing terbang',
                'option_2' => 'Semua anjing tidak bisa terbang',
                'option_3' => 'Semua anjing tidak bisa menyanyi',
                'option_4' => null,
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Jika semua mobil berwarna hijau, maka ….',
                'option_1' => 'Ford berwarna hitam',
                'option_2' => 'Mobil kecil berwarna hijau',
                'option_3' => 'Truk tidak berwarna hijau',
                'option_4' => 'Bis berwarna hijau',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('inteligence_quotient_test')->insert([
            [
                'question' => 'Angka berapakah yang lebih besar dari 10 yang merupakan separuh dari angka yang 10 lebih kecil dari 50?',
                'option_1' => '15',
                'option_2' => '20',
                'option_3' => '25',
                'option_4' => '30',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Dua angka jumlahnya adalah 80. Jika angka 5 lebih besar dari yang lain, berapakah angka yang lebih besar?',
                'option_1' => '40',
                'option_2' => '42,5',
                'option_3' => '45',
                'option_4' => '80',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Dalam beberapa tahun terakhir pola asuh orang tua telah mengalami banyak perubahan, namun para ahli psikologi anak percaya bahwa peran dasar orang tua pada dasarnya ….',
                'option_1' => 'Berubah',
                'option_2' => 'Tidak berharga',
                'option_3' => 'Perlindungan',
                'option_4' => 'Tidak berubah',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Kata-kata ini dapat disusun menjadi sebuah kalimat. Benar atau salahkah kalimat ini? HUJAN TIDAK PERNAH DI CALIFORNIA',
                'option_1' => 'Benar',
                'option_2' => 'Salah',
                'option_3' => null,
                'option_4' => null,
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Dua buah mobil mulai berjalan dari titik yang sama dengan menghadap arah yang berlawanan. Tiap mobil berjalan sejauh 3 km, belok kiri, kemudian berjalan sejauh 4 km. Berapakah jarak antara kedua mobil tersebut?',
                'option_1' => '5 km',
                'option_2' => '6 km',
                'option_3' => '10 km',
                'option_4' => '14 km',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Zoology berkenaan dengan monyet, sebagaimana botani berkenaan dengan ….',
                'option_1' => 'Botol',
                'option_2' => 'Mawar',
                'option_3' => 'Tikus',
                'option_4' => 'Siswa',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Italia berkenaan dengan Eropa, sebagaimana Jepang berkenaan dengan ….',
                'option_1' => 'Orang Italia',
                'option_2' => 'Orang Jepang',
                'option_3' => 'China',
                'option_4' => 'Asia',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 4,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Manakah yang tidak termasuk dalam kelompok ini?',
                'option_1' => 'Aceh',
                'option_2' => 'Bali',
                'option_3' => 'Makassar',
                'option_4' => 'Banten',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 3,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => 'Bulan berkenaan dengan bumi, sebagaimana bumi berkenaan dengan ….',
                'option_1' => 'Satelit',
                'option_2' => 'Matahari',
                'option_3' => 'Venus',
                'option_4' => 'Angkasa',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 2,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question' => '300.000 km per detik adalah ….',
                'option_1' => 'Kecepatan cahaya',
                'option_2' => 'Hukum kehidupan',
                'option_3' => 'Kecepatan knalpot',
                'option_4' => 'Keganjilan',
                'option_5' => null,
                'option_6' => null,
                'correct_answer' => 1,
                'score' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);  

        for($i = 0; $i < 50; $i++) {
            DB::table('personality_test')->insert([
                'question' => 'Question '.($i+1),
                'option_1' => 'Option 1',
                'option_2' => 'Option 2',
                'option_3' => 'Option 3',
                'option_4' => 'Option 4',
                'category_option_1' => 'Koleris',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } 
    }
}
