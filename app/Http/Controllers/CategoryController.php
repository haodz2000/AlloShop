<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategory = Category::orderBy('category_id','desc')->get();
        return view('admin.pages.category.index',compact('listCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
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
                'category_name'   => 'required|unique:categories|max:100',
                'description'   => 'required'
            ],
            [
                'category_name.required'    => 'Field Name is required',
                'category_name.unique'      => 'This name is exist',
                'description.required'  => 'Field description is required',
            ]
        );

        $category = new Category();
        $category->category_name   = $data['category_name'];
        $category->description = $data['description'];
        
        $addSuccess = $category->save();
        if ($addSuccess) {
            return redirect()->route('category.index')->with('success','Add category is success!');
        }
        else {
            return redirect()->back()->with('error','Has been error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Category::find($id);
       return view('admin.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'category_name'   => 'required|max:100',
                'description'   => 'required'
            ],
            [
                'category_name.required'    => 'Field Name is required',
                'description.required'  => 'Field description is required'
            ]
        );

        $category = Category::find($id);
        $category->category_name   = $data['category_name'];
        $category->description = $data['description'];
        
        $updateSuccess = $category->save();
        if ($updateSuccess) {
            return redirect()->route('category.index')->with('success','Update category is success!');
        }
        else {
            return redirect()->back()->with('error','Has been error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success','Delete category success!');
    }
}
