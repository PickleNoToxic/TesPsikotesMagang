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
                'number_of_questions_personality_test' => 40,
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
                'score_koleris' => 0.0,
                'score_phlegmatis' => 0.0,
                'score_sanguinis' => 0.0,
                'score_melankolis' => 0.0,
                'is_admin' => true,
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now()
            ]
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
            'correct_answer' => 1, 
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
            'option_3' => null,
            'option_4' => null,
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
            'option_3' => null,
            'option_4' => null,
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
                'option_4' => null,
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
                'option_5' => 'Kamis',
                'option_6' => 'Jum\'at',
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
                'option_2' => 'Bayi/anak',
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


        DB::table('personality_test')->insert([
            [
                'option_1' => 'Mau melakukan suatu hal yang baru dan berani dengan tekad untuk menguasainya ',
                'option_2' => 'Mudah menyesuaikan diri dan senang dalam situasi',
                'option_3' => 'Penuh ekspresi, sering menggunakan isyarat tangan, lengan, dan wajah secara hidup',
                'option_4' => 'Suka menyelidiki bagian-bagian hubungan yang logis dan semestinya',
                'category_option_1' => 'Koleris',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Melakukan sesuatu sampai selesai sebelum memulai lainnya ',
                'option_2' => 'Penuh kesenangan dan selera humor yang baik ',
                'option_3' => 'Meyakinkan banyak orang dengan logika dan fakta, bukannya pesona atau kekuasaan ',
                'option_4' => 'Tampak tidak terganggu dan tenang serta menghindari setiap bentuk kekacauan',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Sanguinis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Dengan mudah menerima pandangan atau keinginan orang lain tanpa banyak perlu mengemukakan pendapatnya sendiri',
                'option_2' => 'Bersedia mengorbankan dirinya demi atau untuk memenuhi kebutuhan orang lain',
                'option_3' => 'Memandang bersama orang lain sebagai kesempatan untuk bersikap manis dan menghibur, bukannya sebagai tantangan atau kesempatan bisnis',
                'option_4' => 'Yakin akan caranya sendiri',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Menghargai keperluan dan perasaan orang lain',
                'option_2' => 'Mempunyai perasaan emosional tetapi jarang memperlihatkannya',
                'option_3' => 'Mengubah setiap situasi, kejadian, atau permainan menjadi kontes dan selalu bermain untuk menang',
                'option_4' => 'Bisa merebut hati orang lain melalui pesona kepribadian',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Memperbaharui dan membantu atau membuat orang lain merasa senang',
                'option_2' => 'Memperlakukan orang lain dengan rasa segan, kehormatan, dan penghargaan',
                'option_3' => 'Menahan diri dan menunjukkan emosi atau antusiasme',
                'option_4' => 'Bisa bertindak cepat dan efektif, boleh dikata dalam semua situasi',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Mudah menerima keadaan atau situasi apa saja',
                'option_2' => 'Secara intensif memperhatikan orang lain dan apa yang terjadi',
                'option_3' => 'Orang mandiri yang bisa sepenuhnya mengandalkan kemampuan, penilaian, dan sumber daya dirinya',
                'option_4' => 'Penuh kehidupan dan gairah',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Memilih mempersiapkan aturan-aturan yang terinci sebelumnya dalam menyelesaikan proyek, dan lebih menyukai keterlibatan dengan tahap-tahap perencanaan',
                'option_2' => 'Tidak terpengaruh oleh penundaan, tetap tenang, dan toleran',
                'option_3' => 'Mengetahui segala-galanya akan beres kalau Anda yang memimpin',
                'option_4' => 'Mendorong atau memaksakan orang lain mengikuti, bergabung, atau menanam 
investasi melalui pesona kepribadiannya ',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Yakin, jarang ragu-ragu atau goyah',
                'option_2' => 'Memilih agar semua kehidupan merupakan bagian yang impulsif, tidak dipikirkan lebih dulu, dan tidak dihambat oleh rencana',
                'option_3' => 'Membuat dan menghayati, menurut rencana sehari-hari, tidak menyukai rencananya terganggu',
                'option_4' => 'Pendiam, tidak mudah terseret dalam pembicaraan',
                'category_option_1' => 'Koleris',
                'category_option_2' => 'Sanguinis',
                'category_option_3' => 'Melankolis',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Mengatur segala-galanya secara metodis dan sistematis',
                'option_2' => 'Bisa menerima apa saja, orang yang cepat melakukannya dengan caranya sendiri',
                'option_3' => 'Bicara terang-terangan dan tanpa menahan diri',
                'option_4' => 'Periang dan meyakinkan dirinya dan orang lain bahwa segal-galanya akan beres',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Menanggapi dan bukan orang yang inisiatif, jarang memulai pembicaraan',
                'option_2' => 'Secara konsisten bisa diandalkan, teguh setia, dan mengabdi kadang-kadang tanpa alasan',
                'option_3' => 'Punya rasa humor yang cemerlang dan bisa membuat cerita apa saja menjadi peristiwa yang menyenangkan',
                'option_4' => 'Kepribadian yang mendominasi dan menyebabkan orang lain ragu-ragu untuk melawannya',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Bersedia mengambil resiko, tidak kenal takut, berani',
                'option_2' => 'Menyenangkan sebagai teman',
                'option_3' => 'Berurusan dengan orang lain secara penuh siasat, perasa dan sabar',
                'option_4' => 'Melakukan segala-galanya secara berurutan dengan ingatan yang jernih tentang segala hal yang terjadi',
                'category_option_1' => 'Koleris',
                'category_option_2' => 'Sanguinis',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Secara konsisten memiliki semangat tinggi dan mempromosikan kebahagiaan pada orang lain',
                'option_2' => 'Tetap memiliki keseimbangan secara emosional, menanggapi sebagaimana yang diharapkan oranglain',
                'option_3' => 'Perhatiannya melibatkan tujuan intelektual dan artistik, seperti teater, simfoni, dan balet',
                'option_4' => 'Percaya diri dan yakin akan kemampuan dan suksesnya sendiri',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Melankolis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Memvisualisasikan hal-hal dalam bentuk yang sempurna, dan perlu memenuhi standar itu sendiri',
                'option_2' => 'Memenuhi diri sendiri, mandiri, penuh kepercayaan diri, dan rupanya tidak begitu memerlukan bantuan',
                'option_3' => 'Tidak pernah mengatakan atau menyebabkan apapun yang tidak menyenangkan atau menimbulkan rasa keberatan',
                'option_4' => 'Mendorong orang lain untuk bekerja, bergabung atau terlibat, dan membuat seluruhnya menyenangkan',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Terang-terangan menyatakan emosi, terutama rasa sayang dan tidak ragu-ragu menyentuh orang lain ketika bicara kepada mereka',
                'option_2' => 'Mempunyai kemampuan membuat penilaian yang cepat dan tuntas',
                'option_3' => 'Memperlihatkan “kepandaian bicara yang menggigit”, biasanya kalimat satu baris yang sifatnya sarkastis',
                'option_4' => 'Intensif dan introspektif tanpa rasa senang kepada percakapan dan pengejaran yang pulasan',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Secara konsisten mencari peranan merukunkan pertikaian supaya bisa menghindari konflik',
                'option_2' => 'Ikut serta atau punya apresiasi mendalam untuk musik, punya komitmen terhadap musik sebagai bentuk seni, bukannya kesenangan pertunjukkan',
                'option_3' => 'Terdorong oleh keperluan untuk produktif, pemimpin yang diikuti orang lain, merasa sulit duduk diam-diam',
                'option_4' => 'Menyukai pesta dan tidak bisa menunggu untuk bertemu dengan setiap orang dalam ruangan, tidak pernah menganggap orang lain asing',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Tanggap dan mengingat kesempatan istimewa dan cepat memberi isyarat yang baik',
                'option_2' => 'Memegang teguh, dengan keras kepala, dan tidak mau melepaskan sampai tujuan tercapai',
                'option_3' => 'Terus menerus bicara, biasanya menceritakan kisah lucu dan menghibur setiap orang di sekelilingnya, merasa perlu mengisi kesunyian supaya membuat orang lain merasa senang',
                'option_4' => 'Mudah menerima pemikiran dan cara-cara orang lain tanpa perlu tidak menyetujui atau mengubahnya',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Selalu bersedia mendengar apa yang orang lain katakan',
                'option_2' => 'Setia kepada seseorang, gagasan, atau pekerjaan, kadang-kadang melampaui batas',
                'option_3' => 'Pemberi penghargaan karena pembawaan, terdorong untuk memimpin, dan sering merasa sulit mempercayai orang lain bisa melakukan pekerjaan dengan sama baiknya',
                'option_4' => 'Penuh kehidupan, kuat, dan penuh semangat',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Mudah puas dengan apa yang dimilikinya, jarang iri hati',
                'option_2' => 'Memegang kepemimpinan dan mengharapkan orang lain mengikutinya',
                'option_3' => 'Mengatur kehidupan, tugas, dan pemecahan masalah dengan membuat daftar, formulir atau grafik',
                'option_4' => 'Tidak ternilai harganya, dicintai, pusat perhatian',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Melankolis',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Menempatkan standar yang tinggi pada dirinya, dan sering pada orang lain, menginginkan segala-galanya pada urutan yang semestinya sepanjang waktu',
                'option_2' => 'Mudah bergaul, bersifat terbuka, mudah diajak bicara',
                'option_3' => 'Harus terus menerus bekerja atau mencapai sesuatu, sering merasa sulit beristirahat',
                'option_4' => 'Menghidupkan pesta dan dengan demikian sangat diinginkan sebagai tamu pesta',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Kepribadian yang hidup, berlebihan, penuh tenaga',
                'option_2' => 'Tidak kenal takut, berani, berterus terang, tidak takut resiko',
                'option_3' => 'Secara konsisten ingin membawa dirinya di dalam batas-batas apa yang dirasakan semestinya',
                'option_4' => 'Kepribadian yang stabil dan mengambil tengah-tengah, tidak menjadi sasaran ketinggian atau kerendahan yang tajam',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Melankolis',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Memperlihatkan sedikit ekspresi wajah atau emosi',
                'option_2' => 'Menghindar dari perhatian orang karena merasa malu (rendah diri/ minder)',
                'option_3' => 'Suka pamer, memperlihatkan apa saja yang gemerlapan dan kuat, terlalu bersuara',
                'option_4' => 'Suka memerintah, mendominasi, kadang-kadang mengesalkan dalam hubungan antara orang dewasa',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Kurang keteraturannya mempengaruhi hampir semua bidang kehidupannya',
                'option_2' => 'Merasa sulit mengenali masalah atau sakit hati atau perasaan orang lain',
                'option_3' => 'Cenderung tidak bergairah, sering merasa bahwa bagaimanapun sesuatu tidak akan berhasil',
                'option_4' => 'Sulit memaafkan dan melupakan sakit hati atau ketidakadilan yang dilakukan kepada mereka, biasanya dendam',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Tidak bersedia atau menolak ikut terlibat, terutama kalau rumit',
                'option_2' => 'Sering memendam rasa tidak senang sebagai akibat merasa tersinggung oleh sesuatu yang sebenarnya atau sesuatu yang dibayangkan',
                'option_3' => 'Berjuang, melawan, atau ragu-ragu menerima cara lain yang bukan caranya sendiri',
                'option_4' => 'Menceritakan kembali kisah/insiden untuk menghibur tanpa menyadari sudah menceritakannya beberapa kali sebelumnya',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Bersikeras tentang persoalan atau perincian sepele, minta perhatian besar kepada perincian yang tidak penting',
                'option_2' => 'Sering mengalami perasaan yang sangat khawatir, sedih, atau gelisah',
                'option_3' => 'Punya ingatan kurang kuat yang biasanya berkaitan dengan kurang disiplin dan tidak mau repot-repot mencatat secara mental hal-hal yang tidak menyenangkan',
                'option_4' => 'Langsung, blak-blakan, tidak sungkan-sungkan mengatakan kepada Anda tepatnya apa yang dipikirkannya',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Merasa sulit bertahan untuk menghadapi rasa kesal atau menunggu orang lain',
                'option_2' => 'Merasa sedih atau kurang kepercayaan',
                'option_3' => 'Merasa sulit membuat keputusan apa saja (bukan kepribadian yang lama-lama memikirkan setiap keputusan supaya bisa membuat keputusan yang sempurna)',
                'option_4' => 'Lebih banyak berbicara daripada mendengarkan, yang mulai bicara, bahkan tanpa menyadari bahwa orang lain sudah bicara',
                'category_option_1' => 'Koleris',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Intensitas dan tuntutannya akan kesempurnaan bisa membuat orang lain menjauhinya',
                'option_2' => 'Tidak punya keinginan untuk mendengarkan atau tertarik kepada perkumpulan, kelompok, aktivitas, atau kehidupan orang lain',
                'option_3' => 'Bisa bergairah sesaat dan sedih pada saat berikutnya, atau bersedia membantu tapi kemudian menghilang, atau berjanji akan datang tapi kemudian lupa untuk muncul',
                'option_4' => 'Merasa sulit secara lisan atau fisik memperlihatkan kasih sayang dengan terbuka',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Bersikeras memaksakan caranya sendiri',
                'option_2' => 'Tidak punya cara yang konsisten untuk melakukan banyak hal',
                'option_3' => 'Standar Anda diterapkan begitu tinggi sehingga orang lain sulit memuaskannya',
                'option_4' => 'Lambat dalam bergerak dan sulit ikut terlibat',
                'category_option_1' => 'Koleris',
                'category_option_2' => 'Sanguinis',
                'category_option_3' => 'Melankolis',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Kepribadian tengah-tengah tanpa tinggi rendah dan tidak memperlihatkan banyak emosi',
                'option_2' => 'Sementara mengharapkan yang terbaik, orang ini biasanya melihat sisi buruk suatu situasi lebih dulu',
                'option_3' => 'Punya harga diri tinggi dan menganggap dirinya selalu benar serta orang terbaik untuk suatu pekerjaan',
                'option_4' => 'Memperbolehkan orang lain (termasuk anak-anak) melakukan apa saja sesukanya untuk menghindari dirinya tidak disukai',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Perangainya seperti anak-anak yang mengutarakan diri dengan ngambek dan berbuat berlebihan serta melupakannya hampir seketika',
                'option_2' => 'Bukan orang yang menetapkan tujuan dan tidak ingin menjadi orang yang seperti itu',
                'option_3' => 'Mengobarkan perdebatan karena biasanya Anda benar, tidak peduli bagaimana situasinya',
                'option_4' => 'Mudah merasa terasing dari orang lain sering karena merasa tidak aman atau takut jangan-jangan orang lain tidak benar-benar senang bersamanya',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Phlegmatis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Perspektif yang sederhana dan kekanak-kanakan, kurang bijaksana atau pengertian tentang tingkat kehidupan yang lebih mendalam',
                'option_2' => 'Sikapnya yang positif dan sering hanya bisa melihat sisi buruk atau gelap dari setiap situasi',
                'option_3' => 'Penuh keyakinan, semangat, dan keberanian, sering dalam pengertian negatif',
                'option_4' => 'Mudah bergaul, tidak peduli, masa bodoh',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Secara konsisten merasa tidak tetap, terganggu atau resah',
                'option_2' => 'Menarik diri dan memerlukan banyak waktu untuk sendirian atau mengasingkan diri',
                'option_3' => 'Menetapkan tujuan secara agresif, terus produktif, dan merasa bersalah kalau beristirahat. Tidak terdorong oleh hasil yang sempurna tetapi kebutuhan untuk pencapaian dan imbalan',
                'option_4' => 'Merasa senang mendapat penghargaan atau persetujuan orang lain, sebagai penghibur orang ini menyukai tepuk tangan, tertawa, dan atau penerimaan penonton',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Terlalu introspektif dan mudah tersinggung kalau disalahpahami',
                'option_2' => 'Kadang-kadang menyatakan dirinya dengan cara yang agak menyinggung perasaan dan kurang pertimbangan',
                'option_3' => 'Mundur dari situasi sulit',
                'option_4' => 'Pembicara yang menghibur dan memaksa diri yang merasa sulit mendengarkan',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Mempunyai cirri khas selalu tidak tetap dan kurang keyakinan bahwa suatu hal akan berhasil',
                'option_2' => 'Kurang kemampuan untuk membuat kehidupan teratur',
                'option_3' => 'Dengan memaksa mengambil control atas situasi dan atau orang lain, apa yang harus mereka lakukan',
                'option_4' => 'Hampir sepanjang waktu merasa tertekan',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Sanguinis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Tidak menentu, serba berlawanan, dengan tindakan dan emosi yang tidak berdasarkan logika',
                'option_2' => 'Pemikiran dan perhatiannya ditujukan ke dalam, hidup di dalam dirinya sendiri',
                'option_3' => 'Tampaknya tidak bisa tahan atau menerima sikap, pandangan atau cara orang lain',
                'option_4' => 'Merasa bahwa kebanyakan hal tidak penting dalam satu atau lain cara',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Phlegmatis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Hidup dalam keadaan tidak teratur, tidak bisa menemukan banyak benda',
                'option_2' => 'Tidak mempunyai emosi yang tinggi, tapi biasanya semangatnya merosot sekali, sering kalau merasa tidak dihargai',
                'option_3' => 'Bicara pelan kalau didesak, tidak mau repot-repot bicara dengan jelas',
                'option_4' => 'Mempengaruhi atau mengurus dengan cerdik atau penuh tipu muslihat demi keuntungannya sendiri dan dengan satu cara akan bisa memaksakan kehendaknya',
                'category_option_1' => 'Sanguinis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Tidak sering bertindak atau berpikir dengan cepat, sangat terganggu',
                'option_2' => 'Bertekad memaksakan kehendaknya, tidak mudah dibujuk, keras kepala',
                'option_3' => 'Perlu menjadi pusat perhatian, ingin dilihat',
                'option_4' => 'Tidak mudah percaya, mempertanyakan motif dibalik kata-kata',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Sanguinis',
                'category_option_4' => 'Melankolis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Memerlukan banyak waktu pribadi dan cenderung menghindari orang lain',
                'option_2' => 'Tidak ragu-ragu, mengatakan kepada orang lain bahwa Anda benar atau memegang kendali',
                'option_3' => 'Menilai pekerjaan atau kegiatan dengan ukuran berapa banyak tenaga yang diperlukan',
                'option_4' => 'Tertawa atau suaranya bisa didengar di atas lain-lain',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Koleris',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Lambat untuk menilai, perlu dorongan untuk termotivasi',
                'option_2' => 'Cenderung mencurigai atau tidak mempercayai gagasan atau orang lain',
                'option_3' => 'Punya kemarahan yang menuntut berdasarkan ketidaksabaran dan sumbu yang tidak bergerak cukup cepat atau tidak menyelesaikan apa yang diperintahkan kepada mereka',
                'option_4' => 'Tidak punya kekuatan untuk berkonsentrasi atau menaruh perhatian, pikirannya berubah-ubah',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Secara sadar atau tidak menyimpan dendam dan menghukum orang yang melanggar, sering dengan diam-diam menahan persahabatan atau kasih sayang',
                'option_2' => 'Menyukai kegiatan bar terus-menerus karena tidak merasa senang melakukan hal yang sama sepanjang waktu',
                'option_3' => 'Tidak bersedia atau melawan keharusan ikut terlibat',
                'option_4' => 'Bisa bertindak tergesa-gesa, tanpa memikirkan dengan tuntas, biasanya karena ketidaksabaran',
                'category_option_1' => 'Melankolis',
                'category_option_2' => 'Sanguinis',
                'category_option_3' => 'Phlegmatis',
                'category_option_4' => 'Koleris',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'option_1' => 'Sering mengendurkan pendiriannya, bahkan ketika Anda benar, untuk menghindari konflik',
                'option_2' => 'Selalu mengevaluasi dan membuat penilaian, sering memikirkan atau menyatakan reaksi negatif',
                'option_3' => 'Cerdik, orang yang selalu bisa menemukan cara untuk mencapai tujuan yang diinginkan',
                'option_4' => 'Rentang perhatian yang kekanak-kanakan dan pendek, yang memerlukan banyak perubahan dan variasi supaya tidak merasa bosan',
                'category_option_1' => 'Phlegmatis',
                'category_option_2' => 'Melankolis',
                'category_option_3' => 'Koleris',
                'category_option_4' => 'Sanguinis',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);




    }
}
