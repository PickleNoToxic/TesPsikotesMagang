<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    public function detail_personality_test()
    {
        return $this->hasMany(DetailPersonalityTest::class);
    }

    public function detail_inteligence_quotient_test()
    {
        return $this->hasMany(DetailInteligenceQuotientTest::class);
    }
}
