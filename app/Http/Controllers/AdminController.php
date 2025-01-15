<?php

namespace App\Http\Controllers;

use App\Models\InteligenceQuotientTest;
use App\Models\PersonalityTest;
use App\Models\User;
use App\Models\Participant;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $inteligence_quotient_tests = InteligenceQuotientTest::where('is_active', 1)->count();
        $personality_tests = PersonalityTest::where('is_active', 1)->count();
        $participants = User::count();
        return view('admin.pages.index', [
            "inteligence_quotient_tests" => $inteligence_quotient_tests,
            "personality_tests" => $personality_tests,
            "participants" => $participants,
        ]);
    }
}
