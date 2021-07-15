@extends('admin.admin_layout')
@section('admin_content')
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="panel-heading">Chỉnh sửa Loại Bánh</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('category-cake.update', $category_cake->category_id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">Thêm Tên loại bánh</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="category_name" value="{{$category_cake->category_name}}">
                </div>
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="email">Miêu Tả Loại Bánh</label>
                    <textarea name="category_des" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10">{{$category_cake->category_des}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Chọn hình ảnh</label>
                    <input type="file" class="form-control-file" id="input-file" name="category_image" onchange="readURL(this);" value="{{$category_cake->category_image}}}">
                    <img src="{{URL::to('public/uploads/category_product/'.$category_cake->category_image)}}" height="100" width="100" id="blah">
                </div>
                <div class="select-status">
                    <select class="form-select" aria-label="Default select example" name="category_status">
                        <option selected>
                            @if ($category_cake->category_status == 0)
                                Ẩn
                            @else
                                Hiển thị
                            @endif
                        </option>
                        @if ($category_cake->category_status == 0)
                            <option value="1">Hiển thị</option>
                        @else
                            <option value="0">Ẩn</option>
                        @endif
                    </select>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
