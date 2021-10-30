<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
                return view('admin.pages.dashboard.dashboard');
                //return view('client.pages.home');
            } 
            if (Auth::user()->level==1) {
                return view('client.pages.home');
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
}
