<?php

namespace App\Http\Controllers;

use App\Models\DetailInteligenceQuotientTest;
use DB;
use Illuminate\Http\Request;

class DetailInteligenceQuotientTestController extends Controller
{
    public function store(Request $request, $userCode)
    {
        DB::beginTransaction();

        try {
            foreach ($request->inteligence_quotient_test as $answer) {
                DetailInteligenceQuotientTest::insert([
                    'user_id' => session('user_id'),
                    'inteligence_quotient_test_id' => $answer['inteligence_quotient_test_id'],
                    'answer' => $answer['answer'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                //Test Error
                // if($answer['inteligence_quotient_test_id'] == 2){
                //     throw new \Exception('error');
                // }
            }

            DB::table('users')
                ->where('id', session(key: 'user_id'))
                ->update(['score_iq' => $request->score]);

            DB::commit();

            return response()->json(['message' => 'Answers saved successfully.'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred'], 500);
        }

    }
}
