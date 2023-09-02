<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;

// Google Login ---
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:4'],
        ]);
    }

    public function loginStore(Request $request)
    {
        try {
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                return redirect('/login_register')->withErrors($validator)->withInput();
            }
            $input = $request->all();
            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            $user = User::where('email', $request->email)->orWhere('username', $request->username)->first();

            if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
                Auth::guard('admin')->login($user); 
                return redirect('/dashboard')->with('success', 'You are logged in!');
            } else {
                if ($fieldType == 'email' && !$user) {
                    Session::flash('warning', 'Email Not Register !');
                } else if ($fieldType == 'username' && !$user) {
                    Session::flash('warning', 'User Name Not Register !');
                } else {
                    Session::flash('warning', 'Password Not Match');
                }
                return redirect()->back();
            }
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return redirect('/login_register');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}