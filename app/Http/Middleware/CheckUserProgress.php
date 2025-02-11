<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CheckUserProgress
{

    public function handle(Request $request, Closure $next, $phase): Response
    {
        $userId = session('user_id');

        if (!$userId) {
            return redirect()->route('registration')->with('error', 'Silakan registrasi terlebih dahulu.');
        }

        $iqTestFinished = session('iq_test_finished');
        $personalityTestFinished = session('personality_test_finished');

        if ($iqTestFinished && $personalityTestFinished) {
            return redirect()->route('finish')->with('swal', [
                'title' => 'Failed!',
                'text' => 'Anda sudah menyelesaikan IQ dan PersonalityTest.',
                'icon' => 'warning'
            ]);
        }

        if ($phase === 'iq-test' && $iqTestFinished) {
            return redirect()->route('resting-state', ['title' => 'Personality'])
                ->with('swal', [
                    'title' => 'Failed!',
                    'text' => 'Anda sudah menyelesaikan IQ Test.',
                    'icon' => 'warning'
                ]);
        }

        if ($phase === 'personality-test' && (!$iqTestFinished || $personalityTestFinished)) {
            return redirect()->route('resting-state', ['title' => 'Inteligence Quotient'])
                ->with('swal', [
                    'title' => 'Failed!',
                    'text' => 'Anda belum menyelesaikan IQ Test.',
                    'icon' => 'warning'
                ]);
        }

        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
        return $response;
    }
}
