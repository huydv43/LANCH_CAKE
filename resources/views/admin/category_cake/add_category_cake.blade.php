@extends('admin.admin_layout')
@section('admin_content')
<div class="container mt-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <div class="panel-heading">Thêm Loại Bánh</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('category-cake.store')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">Thêm Tên loại bánh</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="category_name">
                </div>
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="email">Miêu Tả Loại Bánh</label>
                    <textarea name="category_des" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Chọn hình ảnh</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="category_image" onchange="readURL(this);">
                    <img src="" height="100" width="100" id="blah" alt="Chưa có ảnh">
                </div>
                <div class="select-status">
                    <select class="form-select" aria-label="Default select example" name="category_status">
                        <option selected>Vui lòng chọn Status</option>
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>               
                <div class="form-group">
                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                        Thêm Bánh
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection