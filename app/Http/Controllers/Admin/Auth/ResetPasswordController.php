<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
    public function showResetForm($token = null)
    {
        return view('admin.auth.passwords.reset')->with(
            ['token' => $token, 'email' => request()->email]
        );
    }

    public function reset(Request $request)
    {
        $this->validateReset($request);

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->password = bcrypt($password);
                $user->save();
                $user->setRememberToken(Str::random(60));
            }
        );

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('admin.login')->with('status', __($response))
            : back()->withErrors(
                ['email' => __($response)]
            );
    }

    protected function validateReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required',
        ]);
    }
}
