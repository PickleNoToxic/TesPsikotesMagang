<?php

namespace App\Http\Controllers;

use App\Models\MasterWeb;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use PHPUnit\Metadata\Uses;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $userId = DB::table('users')->insertGetId([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'whatsapp' => str($request->whatsapp),
            'address' => $request->address,
            'position' => $request->position,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        session(['user_id' => $userId]);
        session(['iq_test_finished' => null]);
        session(['personality_test_finished' => null]);
    }

    public function inteligence_score(Request $request)
    {
        $userId = (int) session('user_id');
        $updated = DB::table('users')
            ->where('id', $userId)
            ->update(['score_iq' => $request->score]);

        if ($updated) {
            return response()->json(['message' => 'Score updated successfully']);
        } else {
            return response()->json(['message' => 'No changes made or user not found']);
        }
    }

    public function personality_score(Request $request)
    {
        $userId = (int) session('user_id');
        $number_of_questions = MasterWeb::latest()->first()->number_of_questions_personality_test;

        $updated = DB::table('users')
            ->where('id', $userId)
            ->update([
                'score_koleris' => round($request->score_koleris / $number_of_questions * 100, 2),
                'score_phlegmatis' => round($request->score_phlegmatis / $number_of_questions * 100, 2),
                'score_sanguinis' => round($request->score_sanguinis / $number_of_questions * 100, 2),
                'score_melankolis' => round($request->score_melankolis / $number_of_questions * 100, 2),
            ]);

        if ($updated) {
            return response()->json(['message' => 'Score updated successfully']);
        } else {
            return response()->json(['message' => 'No changes made or user not found']);
        }
    }

    public function all()
    {
        // $datas = DB::table('users')->where('is_admin', 0)->get();
        // $datas = User::where('is_admin', 0)->with(['detail_personality_test.personalityTest'])->get();
        $datas = User::where('is_admin', 0)->get();

        return view('admin.pages.participants.index', [
            "datas" => $datas
        ]);
    }
}
