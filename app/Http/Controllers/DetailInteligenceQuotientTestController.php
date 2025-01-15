<?php

namespace App\Http\Controllers;

use App\Models\DetailInteligenceQuotientTest;
use Illuminate\Http\Request;

class DetailInteligenceQuotientTestController extends Controller
{
     public function store(Request $request, $userCode)
    {

        try{
        $validationData = $request->validate([
            'inteligence_quotient_test' => 'required|array',
            'inteligence_quotient_test.*.inteligence_quotient_test_id' => 'required|int',
            'inteligence_quotient_test.*.answer' => 'nullable|integer|min:1|max:5',
        ]);


        foreach ($validationData['inteligence_quotient_test'] as $answer) {
            DetailInteligenceQuotientTest::insert([
                'user_id' => session('user_id'),
                'inteligence_quotient_test_id' => $answer['inteligence_quotient_test_id'],
                'answer' => $answer['answer'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return response()->json(['message' => 'Answers saved successfully.'], 200);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
