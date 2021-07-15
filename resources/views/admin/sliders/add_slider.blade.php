@extends('admin.admin_layout') @section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">Thêm Slider</div>
        <form action="{{ route('slider.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="name">Thêm Title</label>
                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="slider_title" >
            </div>
            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="name">Thêm Tên Button</label>
                <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="slider_namebtn" >
            </div>
            <div class="form-group" id="select-status">
                <select class="form-select" aria-label="Default select example" name="slider_status">
                    <option selected>Vui lòng chọn Status</option>
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
            <div class="form-group" id="input-image">
                <input type="file" class="form-control-file" id="input-file" name="slider_image" onchange="readImageSlider(this);">
                <img src="" alt="" height="300" width="300" id="blah">
            </div>
            <button type="submit">Thêm Ảnh</button>
        </form>
    </div>
</div>
@endsection
