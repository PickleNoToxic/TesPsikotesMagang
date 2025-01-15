<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function store(Request $request){
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

        return response()->json([
            'user_id' => $userId
        ]);
    }
}
