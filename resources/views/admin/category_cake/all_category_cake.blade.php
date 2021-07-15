@extends('admin.admin_layout') @section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">Responsive Table</div>
        @if ($message = Session::get('message'))
            <div class="alert alert-danger">
                <ul>
                    {{ $message }}
                </ul>
            </div>
        @endif
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width: 20px">
                            <label class="i-checks m-b-none">
                                <input type="checkbox" name="check-all" /><i></i>
                            </label>
                        </th>
                        <th>Tên Loại Bánh</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Ngày tạo</th>
                        <th>Actions</th>
                        <th style="width: 30px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category_cake as $cat)
                        <tr>
                            <td>
                                <label class="i-checks m-b-none"
                                    ><input type="checkbox" name="post[]" /><i></i
                                ></label>
                            </td>
                            <td>
                                {{$cat->category_name}}
                            </td>
                            <td>
                                <span class="text-ellipsis">
                                        @if (strlen($cat->category_des) > 100 )
                                            {{ substr($cat->category_des, 0, 100) }} <?php echo "...";?>
                                        @else
                                            {{ $cat->category_des }}                                         
                                        @endif
                                </span>
                            </td>
                            <td>
                                @if ($cat->category_status == 0)
                                    <span class="text-ellipsis">
                                        Ẩn
                                    </span> 
                                @else 
                                    <span class="text-ellipsis">
                                        Hiển thị
                                    </span>                                    
                                @endif
                            </td>
                            <td>
                                <span class="text-ellipsis">
                                    {{$cat->updated_at}}
                                </span
                                >
                            </td>
                            <td class="d-flex align-items-center justify-content-around" style="display: flex;">
                                <form action="{{ route('category-cake.show', $cat->category_id) }}" method="get">
                                    <button class="btn btn-sm btn-primary rounded-0">
                                        Show
                                    </button>
                                </form>
                                <form action="{{ route('category-cake.edit',$cat->category_id) }}" method="get">
                                    <button class="btn btn-sm btn-warning rounded-0">
                                        Edit
                                    </button>
                                </form>
                                <form action="{{route('category-cake.destroy', $cat->category_id)}}" method="POST">
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-sm btn-danger rounded-0">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm"
                        >showing 20-30 of 50 items</small
                    >
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <ul class="d-flex justify-content-center">
                            {{$category_cake->links()}}
                        </ul>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
