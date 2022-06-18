<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Auth;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        
        if (Auth()->attempt($credentials)) {

            //getting perticular user object from given email and extracting the name
            $user = User:: where('email', $request->email)->get();
            $user = $user[0]->name;
            
            $request->session()->put('user', $user);
            return view('admin.index');
        }

        return redirect(route('login'))->with('error' , 'Oppes! You have entered invalid credentials');
    }

    public function logout(){
        if(session()->has('user')){
            Auth()->logout();

            session()->forget('user');
            return redirect(route('login'));
        }
    }
}
