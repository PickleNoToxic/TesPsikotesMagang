<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    }

    public function inteligence_score(Request $request)
    {
        $userId =(int) session('user_id');
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
        $userId =(int) session('user_id');
        $updated = DB::table('users')
            ->where('id', $userId)  
            ->update(['score_personality' => $request->score]);  

        if ($updated) {
            return response()->json(['message' => 'Score updated successfully']);
        } else {
            return response()->json(['message' => 'No changes made or user not found']);
        }
    }

    public function all()
    {
        $datas = DB::table('users')->get();

        return view('admin.pages.participants.index', [
            "datas" => $datas
        ]);
    }
}
