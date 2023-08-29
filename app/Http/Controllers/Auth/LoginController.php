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

    public function showLogin()
    {
        return view('auth.login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:4'],
        ]);
    }

    public function loginStore(Request $request)
    {
        try {
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                return redirect('login')->withErrors($validator)->withInput();
            }
            $user = User::where('email', '=', $request->email)->first();
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                Auth::login($user);
     
                return redirect('/user')->with('success', 'Login SuccessFull !');
            } else {
                if ($user) {
                    $request->session()->flash('warning', 'Password Not Match');
                } else {
                    Session::flash('warning', 'Email Not Register !');
                }
                return redirect()->back();
            }
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return redirect('/login');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
