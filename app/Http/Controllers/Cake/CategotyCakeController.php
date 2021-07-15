<?php

namespace App\Http\Controllers\Cake;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryProductRequest;
use App\Http\Requests\UpdateCategoryCakeRequest;
use Illuminate\Http\Request;
use App\Models\CategoryCake;

class CategotyCakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_cake = CategoryCake::paginate(5);
        return view(
            'admin.category_cake.all_category_cake',
            ['category_cake' => $category_cake]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_cake.add_category_cake');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryProductRequest $request)
    {
        $uuid = Str::uuid()->toString();
        $get_image = $request->file('category_image');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/category_product', $new_image);
        $category_cake = new CategoryCake();
        $category_cake->category_id = $uuid;
        $category_cake->category_name = $request->category_name;
        $category_cake->category_des = $request->category_des;
        $category_cake->category_status = $request->category_status;
        $category_cake->category_image = $new_image;
        $validated = $request->validated();
        if ($validated) {
            $category_cake->save();
            return redirect()->route('category-cake.index')->with('message','Thêm sản phẩm thành công !');
        } else {
            return back()->withErrors($validated);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $category_cake = CategoryCake::find($category_id);
        return view(
            'admin.category_cake.show_category_cake',
            ['category_cake' => $category_cake]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $category_cake = CategoryCake::find($category_id);
        return view(
            'admin.category_cake.edit_category_cake',
            ['category_cake' => $category_cake]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryCakeRequest $request, $category_id)
    {
        $get_image = $request->file('category_image');
        $image = null;
        if ($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/category_product', $new_image);
            $image = $new_image;
            
        } else {
            $cat = CategoryCake::find($category_id);
            $old_image = $cat->category_image;
            $image = $old_image;
        }
        
        $category_cake = CategoryCake::find($category_id);
        $category_cake->category_name = $request->category_name;
        $category_cake->category_des = $request->category_des;
        $category_cake->category_status = $request->category_status;
        $category_cake->category_image = $image;
        $validated = $request->validated();
        if ($validated) {
            $category_cake->save();
            return redirect()->route('category-cake.index')->with('message','Cập nhật sản phẩm thành công !');
        } else {
            return back()->withErrors($validated);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $category_cake = CategoryCake::find($category_id);
        $category_cake->delete();
        return redirect()->route('category-cake.index')->with('message','xóa sản phẩm thành công !');
    }
}
