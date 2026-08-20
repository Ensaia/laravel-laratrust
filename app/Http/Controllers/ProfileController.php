<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Notifications\UserStatusChanged;

class ProfileController extends Controller
{
    /**
     * Display a user profile
     * .
     */
    public function index()
    {
        return view('dashboard.user.profile');
    }

    /**
     * Update profile information.
     */
    public function updateInformation(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                // Ensure the email is unique, ignoring the current user's email
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        if ($user->name !== $request->name) {
            $user->name = $request->name;
            $user->save();
            $user->notify(new UserStatusChanged($user));
        } elseif ($request->email !== $user->email) {
            $user->email = $request->email;
            $user->email_verified_at = null; //
            $user->save();
            $user->notify(new UserStatusChanged($user));
            $user->sendEmailVerificationNotification();
        }
        if ($user->hasRole('user')) {
            return redirect()->route('homeUserProfile')->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
        } else {
            return redirect()->route('userProfile')->with('success', Config::get('constants.message.UPDATE_SUCCESS'));

        }

    }

    /**
     * Update profile password.
     */
    public function updatePassword(Request $request)
    {
//        dd($request);
        $request->validate([
            'current_password' => ['required', 'string', 'current_password'],
            'password' => ['required', 'string', Password::defaults(), 'confirmed'],
        ],
            [
                'current_password.current_password' => 'كلمة المرور الحالية غير صحيحة.',
            ]
        );

        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('userProfile')->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
    }
}
