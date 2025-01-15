<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InteligenceQuotientTest;
use DB;

class InteligenceQuotientTestController extends Controller
{
    public function index()
    {
        $datas = InteligenceQuotientTest::latest()->get();
        return view('admin.pages.inteligence-quotient-test.index', [
            "datas" => $datas
        ]);
    }

    public function store(Request $request) {
        DB::table('inteligence_quotient_test')->insert([
            'question' => $request->question,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'correct_answer' => $request->correct_answer,
            'score' => $request->score,
            'is_active' => $request->is_active,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('inteligence-quotient-test.index');
    }
}
