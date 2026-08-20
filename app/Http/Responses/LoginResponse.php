<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object's given state.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function toResponse($request): RedirectResponse
    {
        $user = Auth::user(); // Get the authenticated user

        if ($user->hasRole('user')) {
            return redirect()->intended('/');
        }else{
            return redirect()->intended('/dashboard');
        }
    }
}
