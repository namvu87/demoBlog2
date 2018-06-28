@extends('backend.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh mục sản phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                    </div>
                @endif
                      @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                        <form action="admin/type_news/edit/{{$type->id}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <label>Tên Mục Bài Viết</label>
                                 <select class="form-control" name="category_news" id="danhmuc">
                                      @foreach($cate_news as $item)  
                                   
                                      <option value="{{$item->id}}">{{$item->title}}</option>
                                        </option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Tiêu Đề</label>
                                <input class="form-control" name="title_type" value="{{$type->title_type}}" placeholder="Nhập tên tiêu đề" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                             <textarea class="form-control" rows="3" value="{{$type->title_type}}"></textarea>
                            </div>
                            <div class="form-group">
                            <label>Hình Ảnh</label>
                            <input type="file" name="image" />
                            @if(isset($error_img))
                                <div class="alert alert-danger">{{$error_img}}</div>
                            @endif
                            <br><img width="200px" src="uploads/5/tin-cong-ty/{{$type->image}}">
                        </div>
                            <button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection