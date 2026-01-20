<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(\Illuminate\Http\Request $request): RedirectResponse
    {
        $user = \App\Models\User::findOrFail($request->route('id'));

        if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            return redirect()->route('login')->with('error', 'Invalid verification link.');
        }

        if ($user->hasVerifiedEmail()) {
            if (! \Illuminate\Support\Facades\Auth::check()) {
                \Illuminate\Support\Facades\Auth::login($user);
            }
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        if (! \Illuminate\Support\Facades\Auth::check()) {
            \Illuminate\Support\Facades\Auth::login($user);
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}
