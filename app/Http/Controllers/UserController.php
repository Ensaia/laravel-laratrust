<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserStatusChanged;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user){
        $users = User::with(['roles','permissions'])->paginate(2);
        return view('dashboard.user.index',['users' => $users]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        //        dd($request);
        $user = User::findOr($user->id);

        // Validate the request data
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

        // Check if the email has changed
        if ($request->email !== $user->email) {
            // Update the email and set verified_at to null
            $user->email = $request->email;
            $user->email_verified_at = null; //
            $user->save();

            $user->notify(new UserStatusChanged($user));
            // Send the new email verification notification
            $user->sendEmailVerificationNotification();

            //return redirect()->route('userProfile')->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
        }

        // If only the name changed (or email didn't change)
        $user->name = $request->name;
        $user->save();

        return redirect()->route('userEdit',$user->id)->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
        /*
        $user->update($request->validated());
        $user->notify(new UserStatusChanged($user));
        return redirect()->route('userEdit',$user->id)->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //$user->delete();
        return redirect()->route('usersIndex')->with('success', Config::get('constants.message.DELETE_SUCCESS'));
    }
}
