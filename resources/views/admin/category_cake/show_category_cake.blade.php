@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">Chi Tiết Loại Bánh</div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Loại Bánh</th>
                        <th>Description</th>
                        <th>Ngày tạo</th>
                        <th>Hình ảnh</th>
                        <th>Actions</th>
                        <th style="width: 30px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $category_cake->category_id }}
                        </td>
                        <td>
                            {{ $category_cake->category_name }}
                        </td>
                        <td>
                            <span class="text-ellipsis">
                                {{ $category_cake->category_des }}                                         
                            </span>
                        </td>
                        <td>
                            <span class="text-ellipsis">
                                {{ $category_cake->created_at }}
                            </span
                            >
                        </td>
                        <td>
                            <img src="{{URL::to('public/uploads/category_product/'.$category_cake->category_image)}}" height="100" width="100">
                        </td>
                        <td class="d-flex align-items-center justify-content-around" style="display: flex;">
                            <form action="{{ route('category-cake.edit', $category_cake->category_id) }}" method="get">
                                <button class="btn btn-sm btn-warning rounded-0">
                                    Edit
                                </button>
                            </form>
                            <form action="{{route('category-cake.destroy', $category_cake->category_id)}}" method="get">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-sm btn-danger rounded-0">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection