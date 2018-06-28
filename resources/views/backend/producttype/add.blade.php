@extends('backend.master')
@section('content')
   <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Sản Phẩm
                            <small>Thêm mới</small>
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
                        <form action="admin/product_type/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <label>Thể loại sản phẩm</label>
                                <select class="form-control" name="category_product" id="theloai">
                                @foreach($cate_pro as $item) 
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Loại sản phẩm</label>
                                <input class="form-control" name="type_name" placeholder="Nhập tên loại sản phẩm" />
                            </div>
                           <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="file" name="image" />
                                @if(isset($error_img))
                                    <div class="alert alert-danger">{{$error_img}}</div>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection