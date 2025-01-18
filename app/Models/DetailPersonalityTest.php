<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPersonalityTest extends Model
{
    use HasFactory;

    protected $table = 'detail_personality_test';

    // protected $with = ['personalityTest'];

    public function personalityTest()
    {
        return $this->belongsTo(PersonalityTest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
