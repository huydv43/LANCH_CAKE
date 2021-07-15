@extends('admin.admin_layout') @section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">Responsive Table</div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width: 20px">
                            <label class="i-checks m-b-none">
                                <input type="checkbox" name="check-all" /><i></i>
                            </label>
                        </th>
                        <th>Title</th>
                        <th>Name-Button</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Ngày tạo</th>
                        <th>Actions</th>
                        <th style="width: 30px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>
                                <label class="i-checks m-b-none"
                                    ><input type="checkbox" name="post[]" /><i></i
                                ></label>
                            </td>
                            <td>
                                {{$slider->slider_title}}
                            </td>
                            <td>
                                <span class="text-ellipsis">
                                    {{ $slider->slider_namebtn}}
                                </span>
                            </td>
                            <td>
                                <img src="{{URL::to('public/uploads/sliders/'.$slider->slider_image)}}" alt="" height="100" width="100">
                            </td>
                            <td>
                                @if ($slider->slider_status == 0)
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
                                {{$slider->updated_at}}
                            </td>
                            
                            <td class="d-flex align-items-center justify-content-around" style="display: flex;">
                                <form action="{{ route('slider.show', $slider->slider_id) }}" method="get">
                                    <button class="btn btn-sm btn-primary rounded-0">
                                        Show
                                    </button>
                                </form>
                                <form action="{{ route('slider.edit',$slider->slider_id) }}" method="get">
                                    <button class="btn btn-sm btn-warning rounded-0">
                                        Edit
                                    </button>
                                </form>
                                <form action="{{route('slider.destroy', $slider->slider_id)}}" method="POST">
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
                            {{$sliders->links()}}
                        </ul>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
