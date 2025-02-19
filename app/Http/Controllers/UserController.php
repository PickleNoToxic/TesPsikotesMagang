<?php

namespace App\Http\Controllers;

use App\Models\MasterWeb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function profile(){
        $user = User::find(1);
        return view('admin.pages.profile.index')->with('email', $user->email);
    }
    public function profileUpdate(Request $request){
        if($request->new_password != $request->confirm_password){
            Alert::error('Failed', 'Password tidak sesuai');
            return back();
        }

        if(strlen($request->new_password) < 5){
            Alert::error('Failed', 'Password minimal 5 karakter');
            return back();
        }

        $user = User::find(1);

        if(!Hash::check($request->old_password, $user->password)){
            Alert::error('Failed', 'Password lama salah');
            return back();
        }

        $user->update([
            'password' => bcrypt($request->new_password)
        ]);

        Alert::success('Success', 'Password berhasil diubah');
        return back();
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

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->detail_inteligence_quotient_test()->delete();
            $user->detail_personality_test()->delete();
            $user->delete();
            return response()->json(['success' => 'Participant deleted successfully']);
        } else {
            return response()->json(['error' => 'Failed to delete participant']);
        }
    }

}
