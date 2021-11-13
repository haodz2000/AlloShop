<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;

class UserController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $address = explode('-',$user->address);
        return view('client.pages.infomation.infomation-update',[
            'user' => $user,
            'address' => $address
        ]);
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'city'=> 'required',
            'district'=> 'required',
            'ward'=> 'required',
            'street'=>'required',
        ]);
        if($validator->passes()){
            $city = $this->getString($request->city);
            $district = $this->getString($request->district);
            $user = User::where('email',Auth::user()->email)->first();
            $user->phone = $request->phone;
            $user->address = $request->street .'-'.$request->ward.'-'.$district.'-'.$city;
            if($request->hasFile('avatar')){
                $image_path = app_path($user->avatar);
                $image_path = public_path($user->avatar);
                File::delete($image_path);
                $image = $request->file('avatar');
                $url = 'assets/storage/images/avatar/'.$image->getClientOriginalName();
                $storedPath = $image->move('assets/storage/images/avatar', $image->getClientOriginalName());
                $user->avatar = $url;
            }
            $user->save();
            return redirect()->route('user.profile');
        }
     }
     public function getString($string){
        $array = explode('/',$string);
        return $array[1];
    }
}
