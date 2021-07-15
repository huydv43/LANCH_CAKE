@extends('admin.admin_layout') @section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">Sửa Slider</div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('slider.update', $slider->slider_id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="name">Thêm Title</label>
                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="slider_title" value="{{$slider->slider_title}}">
            </div>
            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="name">Thêm Tên Button</label>
                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="slider_namebtn" value="{{$slider->slider_namebtn}}">
            </div>
            <div class="form-group" id="select-status">
                <select class="form-select" aria-label="Default select example" name="slider_status">
                    <option selected>
                        @if ($slider->slider_status == 0)
                            Ẩn
                        @else
                            Hiển thị
                        @endif
                    </option>
                    @if ($slider->slider_status == 0)
                        <option value="1">Hiển thị</option>
                    @else
                        <option value="0">Ẩn</option>
                    @endif
                </select>
            </div>
            <div class="form-group" id="input-image">
                <input type="file" class="form-control-file" id="input-file" name="slider_image" onchange="readImageSlider(this);">
                <img src="{{URL::to('public/uploads/sliders/'.$slider->slider_image)}}" id="blah">
            </div>
            <button type="submit">Update Slider</button>
        </form>
    </div>
</div>
@endsection
