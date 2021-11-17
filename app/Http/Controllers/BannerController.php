<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner_list = Banner::select('banner_id', 'name', 'url_banner','status')->orderBy('banner_id','desc')->paginate(2);
        return view('admin.pages.banner.index', [
            'banner_list' => $banner_list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|max:255',
                'url_banner' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=500,min_heigh=500,max_width=6000,max_heigh=6000',
                'status' => 'required'
            ]
        );

        $get_image      = $request->url_banner;
        $path           = 'assets/storage/images/banner';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image     = current(explode('.', $get_name_image));
        $ext            = $get_image->getClientOriginalExtension();
        $name_image     = $name_image.rand(1,99).'.'.$ext;
        $get_image->move($path,$name_image);

        $banner = new Banner;
        $banner->name = $data['name'];
        $banner->status = $data['status'];
        $banner->url_banner = $name_image;
        $addBanner = $banner->save();
        if ($addBanner) {
            return redirect()->back()->with('success','Create Banner is successfully!');
        }
        else {
            return redirect()->back()->with('error','Create Banner is failed!');
        }
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
        $banner = Banner::find($id);
        return view('admin.pages.banner.edit',compact('banner'));
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
        $data = $request->validate(
            [
                'name' => 'required|max:255',
                'url_banner' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=500,min_heigh=500,max_width=6000,max_heigh=6000',
                'status' => 'required'
            ]
        );

        $banner = Banner::find($id);
        $banner->name   = $data['name'];
        $banner->status = $data['status'];
        
        // sửa ảnh
        $get_image = $request->url_banner;
        if ($get_image) {
            $pathRemove = 'assets/storage/images/banner/'.$banner->url_banner;
            if (file_exists($pathRemove)) {
                unlink($pathRemove);
            }
            $path            = 'assets/storage/images/banner';
            $get_name_image  = $get_image->getClientOriginalName();
            $name_image      = current(explode('.', $get_name_image));
            $ext             = $get_image->getClientOriginalExtension();
            $name_image      = $name_image.rand(0,99).'.'.$ext;
            $get_image->move($path,$name_image);
            $banner->url_banner = $name_image;
        }

        $editSuccess = $banner->save();
        if ($editSuccess) {
            return redirect()->route('banner.index')->with('success','Update banner is successfully!');
        }
        else {
            return redirect()->back()->with('error','Faild to update banner!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $path = 'assets/storage/images/banner/'.$banner->url_banner;
        if (file_exists($path)) {
            unlink($path);
        }
        $banner->delete($id);
        return Response()->json($banner);
    }
}