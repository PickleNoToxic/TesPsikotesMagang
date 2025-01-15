<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteligenceQuotientTest extends Model
{
    use HasFactory;

    protected $table = 'inteligence_quotient_test';

    public function detail_inteligence_quotient_test()
    {
        return $this->hasMany(DetailInteligenceQuotientTest::class);
    }
}
