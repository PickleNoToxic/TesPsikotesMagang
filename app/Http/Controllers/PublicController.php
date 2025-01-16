<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\InteligenceQuotientTest;
use App\Models\MasterWeb;
use App\Models\User;
use App\Models\Management;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.pages.index', [
        ]);
    }

    public function registration()
    {
        // $events = Event::where('is_active', 1)->latest()->get();
        // $managements = Management::where('is_active', 1)->latest()->get();
        $events = null;
        $managements = null;
        return view('public.pages.registration', [
            'events' => null,
            'managements' => null
        ]);
    }

    public function inteligenceQuotientTest(){
        $master_web_data = MasterWeb::latest()->first();
        $number_of_questions = $master_web_data->number_of_questions_iq_test;

        $datas = InteligenceQuotientTest::where('is_active', 1)->latest()->get()->take($number_of_questions);
        return view('public.pages.validation', [
            "datas" => $datas
        ]);
    }

    public function resting()
    {
        return view('public.pages.resting', [
        ]);
    }

    public function biografi()
    {
        return view('public.pages.biografi', [
        ]);
    }

    public function cognitive()
    {
        return view('public.pages.cognitive', [
        ]);
    }

    public function validation()
    {
        return view('public.pages.validation', [
        ]);
    }

    public function finish()
    {   
        $user = User::find(session('user_id'));
        $countUser = User::count();
        $scoreBetter = User::where('score_iq', '<', $user->score_iq)->count();
        $percentage = round($scoreBetter / ($countUser-1) * 100, 2);
        return view('public.pages.finish', [
            'score' => $user->score_iq,
            'percentage' => $percentage
        ]);
    }
}
