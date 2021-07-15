<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Requests\SliderRequest;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(4);
        return view(
            'admin.sliders.all_slider',
            ['sliders' => $sliders]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $uuid = Str::uuid()->toString();
        $get_image = $request->file('slider_image');
        // $image_resize = Image::make($get_image->getRealPath());     //resize image         
        // $image_resize->resize(700, 1920);
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/sliders', $new_image);
        $slider = new Slider();
        $slider->slider_id = $uuid;
        $slider->slider_title = $request->slider_title;
        $slider->slider_status = $request->slider_status;
        $slider->slider_namebtn = $request->slider_namebtn;
        $slider->slider_image = $new_image;
        $validated = $request->validated();
        if ($validated) {
            $slider->save();
            return redirect()->route('slider.index')->with('message','Thêm thành công slider!');
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
    public function edit($slider_id)
    {
        $slider = Slider::find($slider_id);
        return view(
            'admin.sliders.edit_slider',
            ['slider' => $slider]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $slider_id)
    {
        $get_image = $request->file('category_image');
        $image = null;
        if ($get_image)
        {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/sliders', $new_image);
            $image = $new_image;
            
        } else {
            $slider_image = Slider::find($slider_id);
            $old_image = $slider_image->slider_image;
            $image = $old_image;
        }
        
        $slider = Slider::find($slider_id);
        $slider->slider_title = $request->slider_title;
        $slider->slider_namebtn = $request->slider_namebtn;
        $slider->slider_status = $request->slider_status;
        $slider->slider_image = $image;
        $validated = $request->validated();
        if ($validated) {
            $slider->save();
            return redirect()->route('slider.index')->with('message','Cập nhật slider phẩm thành công !');
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
    public function destroy($slider_id)
    {
        $slider = Slider::find($slider_id);
        $slider->delete();
        return redirect()->route('slider.index')->with('message','xóa slider phẩm thành công !');
    }
}
