<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailInteligenceQuotientTest extends Model
{
    use HasFactory;

    protected $table = 'detail_inteligence_quotient_test';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inteligenceQuotientTest()
    {
        return $this->belongsTo(InteligenceQuotientTest::class);
    }
}
