@extends('backend.master')
@section('content')
   <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                      @if(isset($thongbao))
                        <div class="alert alert-success">
                            {{$thongbao}}
                        </div>
                    @endif
                        <form action="admin/product/add" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />

                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                 <select class="form-control" name="category_product" id="theloai">
                                   @foreach($cate_product as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach

                               </select>
                            </div>
                            <div class="form-group">
                                <label>Loại sản Phẩm</label>
                                <select class="form-control" name="product_type" id="loaisanpham">
                                   @foreach($product_type as $item)
                                    <option value="{{$item->id}}">{{$item->type_name}}</option>
                                   @endforeach

                               </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="product_name"  placeholder="Nhập tên sản phẩm" />
                            </div>
                           <div class="form-group">
                                <label>Mã sản phẩm</label>
                                <input class="form-control" name="code" placeholder="Nhập code sản phẩm" />
                            </div>
                           <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                             <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="file" name="image" />
                                 @if(isset($error_img))
                                    <div class="alert alert-danger">{{$error_img}}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Kích thước sản phẩm</label>
                                <input class="form-control" name="size" placeholder="Nhập kích thước" />
                            </div>

                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection