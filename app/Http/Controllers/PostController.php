<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPost = Post::with('Users')->orderBy('post_id','desc')->paginate(2);
        return view('admin.pages.post.index',compact('listPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate(
            [
                'title' => 'required|max:255',
                'user_id' => 'required',
                'content' => 'required',
                'url_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_heigh=100,max_width=3000,max_heigh=3000',
                'status' => 'required',
                'slug' => 'required'
            ]
        );

        // xu ly anh cua post
        $get_image      = $request->url_image;
        $path           = 'assets/admin/images/posts';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image     = current(explode('.', $get_name_image));
        $ext            = $get_image->getClientOriginalExtension();
        $name_image     = $name_image.rand(1,99).'.'.$ext;
        $get_image->move($path,$name_image);

        $post = new Post();
        $post->title   = $data['title'];
        $post->content = $data['content'];
        $post->user_id = $data['user_id'];
        $post->slug    = $data['slug'];    
        $post->status  = $data['status'];
        $post->url_image = $name_image;

        $addSuccess = $post->save();
        if ($addSuccess) {
            return redirect()->back()->with('success','Create Post is successfully!');
        }
        else {
            return redirect()->back()->with('error','Faild to create a new post!');
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
        $post = Post::find($id);
        return view('admin.pages.post.edit', compact('post'));
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
                'title' => 'required|max:255',
                'user_id' => 'required',
                'content' => 'required',
                'url_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_heigh=100,max_width=3000,max_heigh=3000',
                'status' => 'required',
                'slug' => 'required'
            ]
        );

        $post = Post::find($id);
        $post->title   = $data['title'];
        $post->content = $data['content'];
        $post->user_id = $data['user_id'];
        $post->slug    = $data['slug'];    
        $post->status  = $data['status'];

        // sửa ảnh
        $get_image = $request->hinhanh;
        if ($get_image) {
            $pathRemove = 'assets/admin/images/posts/'.$post->url_image;
            if (file_exists($pathRemove)) {
                unlink($pathRemove);
            }
            $path            = 'assets/admin/images/posts';
            $get_name_image  = $get_image->getClientOriginalName();
            $name_image      = current(explode('.', $get_name_image));
            $ext             = $get_image->getClientOriginalExtension();
            $name_image      = $name_image.rand(0,99).'.'.$ext;
            $get_image->move($path,$name_image);
            $post->url_image = $name_image;
        }

        $editSuccess = $post->save();
        if ($editSuccess) {
            return redirect()->route('post.index')->with('success','Update my post is successfully!');
        }
        else {
            return redirect()->back()->with('error','Faild to update my post!');
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
        $post = Post::find($id);
        $path = 'assets/admin/images/posts/'.$post->url_image;
        if (file_exists($path)) {
            unlink($path);
        }
        $post->delete($id);
        return Response()->json($post);
    }
}
