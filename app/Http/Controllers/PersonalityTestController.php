<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalityTest;

class PersonalityTestController extends Controller
{
    public function index()
    {
        $datas = PersonalityTest::latest()->get();
        return view('admin.pages.personality-test.index', [
            "datas" => $datas
        ]);
    }
}
