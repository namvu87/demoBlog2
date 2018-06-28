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
                        <form action="admin/categoryproduct/edit/{{$cate_pro->id}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <div class="form-group">
                                <label>Tên Mục</label>
                                 <input class="form-control" name="name" placeholder="Điền tên thể loại sản phẩm" value="{{$cate_pro->name}}" />
                            </div>
                            
                           <div class="form-group">
                            <label>Hình Ảnh</label>
                            <input type="file" name="image" />
                            @if(isset($error_img))
                                <div class="alert alert-danger">{{$error_img}}</div>
                            @endif
                            <br><img width="200px" src="uploads/2/banner-group-product/{{$cate_pro->image}}">
                        </div>
                            <button type="submit" class="btn btn-default">Sửa </button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection