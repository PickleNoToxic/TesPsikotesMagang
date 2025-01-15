<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterWeb;
use RealRashid\SweetAlert\Facades\Alert;

class MasterWebController extends Controller
{
    public function updateIQTest(Request $request){
        $result = MasterWeb::where('id', 1)
                    ->update([
                        'number_of_questions_iq_test' => $request->number_of_questions_iq_test,
                        'iq_test_duration' => $request->iq_test_duration,
                    ]);

        if ($result) {
            Alert::success('Success', 'Data berhasil dirubah');
            return back();
        } else {
            Alert::error('Failed', 'Gagal diproses! Coba beberapa saat lagi.');
            return back();
        }
    }

    public function updatePersonalityTest(Request $request){
        $result = MasterWeb::where('id', 1)
                    ->update([
                        'number_of_questions_personality_test' => $request->number_of_questions_personality_test,
                        'personality_test_duration' => $request->personality_test_duration,
                    ]);

        if ($result) {
            Alert::success('Success', 'Data berhasil dirubah');
            return back();
        } else {
            Alert::error('Failed', 'Gagal diproses! Coba beberapa saat lagi.');
            return back();
        }
    }
}
