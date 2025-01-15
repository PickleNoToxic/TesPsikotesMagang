<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
            'events' => $events,
            'managements' => $managements
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
        return view('public.pages.finish', [
        ]);
    }
}
