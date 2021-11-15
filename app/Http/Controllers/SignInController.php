<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Laravel\Socialite\Facades\Socialite;
class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){

        return redirect('/signin')->with(Auth::logout());
    }

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('authentication.pages.signin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->except(['password','confirm-password']));
        }

        $remember = $request->remember;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)) {

            if (Auth::user()->status!= 1) {
                return redirect()->back()->with('error','This account was block!');
            }
            if (Auth::user()->level>2) {
                return redirect()->route('dashboard');
                //return view('client.pages.home');
            }
            if (Auth::user()->level==1) {
                return redirect()->route('home');
                //return view('client.pages.home');
            }
        };
        return redirect()->back()->with('error','Email hoặc mật khẩu sai !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Facebook Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_regiterOrLoginUser($user);
        return redirect()->route('home');
        // $user->token;
    }
    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->_regiterOrLoginUser($user);
        return redirect()->route('home');
        // $user->token;
    }
    protected function _regiterOrLoginUser($data){
        $user = User::where('email',$data->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->avatar = $data->avatar;
            $user->provider_id = $data->id;
            $user->save();
        }
        Auth::login($user);
    }
}
