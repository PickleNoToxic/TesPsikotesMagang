<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InteligenceQuotientTest;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class InteligenceQuotientTestController extends Controller
{
    public function index()
    {
        $datas = InteligenceQuotientTest::latest()->get();
        return view('admin.pages.inteligence-quotient-test.index', [
            "datas" => $datas
        ]);
    }

    public function store(Request $request) {
        $result = DB::table('inteligence_quotient_test')->insert([
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
        $test = InteligenceQuotientTest::findOrFail($request->activeId);

        $data['is_active'] = true;

        $result = InteligenceQuotientTest::where('id', $test->id)->update($data);

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
        $test = InteligenceQuotientTest::findOrFail($request->inactiveId);

        $data['is_active'] = false;

        $result = InteligenceQuotientTest::where('id', $test->id)->update($data);

        if ($result) {
            Alert::success('Success', 'Data berhasil dinonaktifkan');
            return back();
        } else {
            Alert::error('Failed', 'Data gagal diaktifkan');
            return back();
        }
    }

    public function update(Request $request, InteligenceQuotientTest $inteligenceQuotientTest) {
        $result = InteligenceQuotientTest::where('id', $inteligenceQuotientTest->id)
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
