<?php

namespace App\Http\Controllers;

use App\Models\DetailPersonalityTest;
use Illuminate\Http\Request;

class DetailPersonalityTestController extends Controller
{
     public function store(Request $request, $userCode)
    {

        try{
        $validationData = $request->validate([
            'personality_test' => 'required|array',
            'personality_test.*.personality_test_id' => 'required|int',
            'personality_test.*.answer' => 'nullable|integer|min:1|max:5',
        ]);


        foreach ($validationData['personality_test'] as $answer) {
            DetailPersonalityTest::insert([
                'user_id' => session('user_id'),
                'personality_test_id' => $answer['personality_test_id'],
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
