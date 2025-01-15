<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalityTest;
use DB;
use App\Models\MasterWeb;
use RealRashid\SweetAlert\Facades\Alert;

class PersonalityTestController extends Controller
{
    public function index()
    {
        $datas = PersonalityTest::get();
        $master_web_data = MasterWeb::latest()->first();
        return view('admin.pages.personality-test.index', [
            "datas" => $datas,
            "master_web_data" => $master_web_data
        ]);
    }

    public function store(Request $request) {
        $result = DB::table('personality_test')->insert([
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

        if($result) {
            Alert::success('Success', 'Data berhasil disimpan');
            return back();
        } else {
            Alert::error('Failed', 'Gagal diproses! Coba beberapa saat lagi.');
            return back();
        }
    }

    public function active(Request $request)
    {
        $test = PersonalityTest::findOrFail($request->activeId);

        $data['is_active'] = true;

        $result = PersonalityTest::where('id', $test->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil diaktifkan');
            return back();
        } else {
            Alert::error('Failed', 'Data gagal diaktifkan');
            return back();
        }
    }

    public function inactive(Request $request)
    {
        $test = PersonalityTest::findOrFail($request->inactiveId);

        $data['is_active'] = false;

        $result = PersonalityTest::where('id', $test->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil dinonaktifkan');
            return back();
        } else {
            Alert::error('Failed', 'Data gagal diaktifkan');
            return back();
        }
    }

    public function update(Request $request, PersonalityTest $personalityTest) {
        $result = PersonalityTest::where('id', $personalityTest->id)
                    ->update([
                        'question' => $request->question,
                        'option_1' => $request->option_1,
                        'option_2' => $request->option_2,
                        'option_3' => $request->option_3,
                        'option_4' => $request->option_4,
                        'correct_answer' => $request->correct_answer,
                        'score' => $request->score,
                        'is_active' => $request->is_active
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
