<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show(){
        $banner_list = Banner::select('banner_id', 'name', 'url_banner')->get();
        return view('admin.pages.banner.banners', [
            'banner_list' => $banner_list,
        ]);
    }
    public function destroy($id){
        $destroy = Banner::find($id)->delete();
        return redirect()->route('banners');
    }
}
