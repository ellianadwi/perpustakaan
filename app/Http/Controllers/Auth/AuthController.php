<?php

namespace App\Http\Controllers\Auth;

//use App\User;
use App\Domain\Entities\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $user;
    protected $auth;
    protected $model;

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

//    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user;
        $this->auth = $auth;
        $this->middleware('guest', ['only' => ['getLogin', 'postLogin']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name'     => 'required|max:255',
//            'email'    => 'required|email|max:255|unique:users',
//            'password' => 'required|min:6|confirmed',
//        ]);
//    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(Request $request)
    {

        if ($this->auth->attempt($request->only('email', 'password'), true)) {
            $user = Auth::user();

            // save to session
            session()->put('id', $user->id);
//            session()->put('organisasi_id', $user->organisasi_id);
//            session()->put('email', $user->email);
//            session()->put('level', $user->level);
//            session()->put('nama', $user->nama);

            // cek apakah levelnya kurang dari atau sama dengan 100

//            return 'Authenticated';
            return redirect()->route('/dashboard');

        }
        session()->flash('auth_message', 'Kombinasi email dan password salah!');
        // redirect to login and set the flash message
        return redirect()->route('login');
//        return "salah";
    }

    public function getLogout()
    {
        session()->flush();
        $this->auth->logout();

        return redirect()->route('login');
    }
}
