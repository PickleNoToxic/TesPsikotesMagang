<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityTest extends Model
{
    use HasFactory;

    public $table = 'personality_test';

    protected $with = ['detail_personality_test'];


    public function detail_personality_test()
    {
        return $this->hasMany(DetailPersonalityTest::class);
    }
}
