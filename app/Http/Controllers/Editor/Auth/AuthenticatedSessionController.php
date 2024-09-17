<?php

namespace App\Http\Controllers\Editor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EditorLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller {
    /** Display the login view. */
    public function create(): View {
        return view('editor.auth.login');
    }

    /** Handle an incoming authentication request. */
    public function store(EditorLoginRequest $request): RedirectResponse {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(route('editor.dashboard', absolute: false));
    }

    /** Destroy an authenticated session. */
    public function destroy(Request $request): RedirectResponse {
        Auth::guard('editor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
