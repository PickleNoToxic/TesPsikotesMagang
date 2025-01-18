<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalityTest;
use DB;
use Validator;
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
        $validator = Validator::make($request->all(), [
            'option_1' => 'required|string',
            'option_2' => 'required|string',
            'option_3' => 'required|string',
            'option_4' => 'required|string',
            'category_option_1' => 'required',
            'category_option_2' => 'required|different:category_option_1',
            'category_option_3' => 'required|different:category_option_1,category_option_2',
            'category_option_4' => 'required|different:category_option_1,category_option_2,category_option_3',
            'statement_1' => 'required|string',
            'statement_2' => 'required|string',
            'statement_3' => 'required|string',
            'statement_4' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', 'Kategori semua opsi tidak boleh kembar.');
            return back();
        }

        $result = DB::table('personality_test')->insert([
                'option_1' => $request->option_1,
                'option_2' => $request->option_2,
                'option_3' => $request->option_3,
                'option_4' => $request->option_4,
                'category_option_1' => $request->category_option_1,
                'category_option_2' => $request->category_option_2,
                'category_option_3' => $request->category_option_3,
                'category_option_4' => $request->category_option_4,
                'statement_1' => $request->statement_1,
                'statement_2' => $request->statement_2,
                'statement_3' => $request->statement_3,
                'statement_4' => $request->statement_4,
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
        $validator = Validator::make($request->all(), [
            'option_1' => 'required|string',
            'option_2' => 'required|string',
            'option_3' => 'required|string',
            'option_4' => 'required|string',
            'category_option_1' => 'required',
            'category_option_2' => 'required|different:category_option_1',
            'category_option_3' => 'required|different:category_option_1,category_option_2',
            'category_option_4' => 'required|different:category_option_1,category_option_2,category_option_3',
            'statement_1' => 'required|string',
            'statement_2' => 'required|string',
            'statement_3' => 'required|string',
            'statement_4' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', 'Kategori semua opsi tidak boleh kembar.');
            return back();
        }
        
        $result = PersonalityTest::where('id', $personalityTest->id)
                    ->update([
                        'option_1' => $request->option_1,
                        'option_2' => $request->option_2,
                        'option_3' => $request->option_3,
                        'option_4' => $request->option_4,
                        'category_option_1' => $request->category_option_1,
                        'category_option_2' => $request->category_option_2,
                        'category_option_3' => $request->category_option_3,
                        'category_option_4' => $request->category_option_4,
                        'statement_1' => $request->statement_1,
                        'statement_2' => $request->statement_2,
                        'statement_3' => $request->statement_3,
                        'statement_4' => $request->statement_4,
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
