<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $with = ['detail_personality_test', 'detail_inteligence_quotient_test'];

    public function detail_personality_test()
    {
        return $this->hasMany(DetailPersonalityTest::class, 'user_id');
    }

    public function detail_inteligence_quotient_test()
    {
        return $this->hasMany(DetailInteligenceQuotientTest::class);
    }
}
