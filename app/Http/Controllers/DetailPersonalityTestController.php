<?php

namespace App\Http\Controllers;

use App\Models\DetailPersonalityTest;
use App\Models\MasterWeb;
use DB;
use Illuminate\Http\Request;

class DetailPersonalityTestController extends Controller
{
    public function store(Request $request, $userCode)
    {
        DB::beginTransaction();
        try {
            $validationData = $request->validate([
                'personality_test' => 'required|array',
                'personality_test.*.personality_test_id' => 'required|int',
                'personality_test.*.answer' => 'nullable',
                'personality_test.*.statement' => 'nullable',
                'personality_test.*.option' => 'nullable',
            ]);


            foreach ($validationData['personality_test'] as $answer) {
                DetailPersonalityTest::insert([
                    'user_id' => session('user_id'),
                    'personality_test_id' => $answer['personality_test_id'],
                    'answer' => $answer['answer'],
                    'statement' => $answer['statement'],
                    'option' => $answer['option'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                //Test Error
                // if($answer['personality_test_id'] == 2){
                //     throw new \Exception('error');
                // }
            }


            $number_of_questions = MasterWeb::latest()->first()->number_of_questions_personality_test;

            DB::table('users')
                ->where('id', session(key: 'user_id'))
                ->update([
                    'score_koleris' => round($request->score_koleris / $number_of_questions * 100, 2),
                    'score_phlegmatis' => round($request->score_phlegmatis / $number_of_questions * 100, 2),
                    'score_sanguinis' => round($request->score_sanguinis / $number_of_questions * 100, 2),
                    'score_melankolis' => round($request->score_melankolis / $number_of_questions * 100, 2),
                ]);

            DB::commit();

            session(['personality_test_finished' => true]);

            return response()->json(['message' => 'Answers saved successfully.'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
