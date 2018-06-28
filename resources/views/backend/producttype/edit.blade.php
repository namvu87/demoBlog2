@extends('backend.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Loại Sản Phẩm
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
                        <form action="admin/product_type/edit/{{$pro_type->id}}" method="POST">
                             <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <label>Danh mục loại sản phẩm</label>
                               <select class="form-control" name="category_type" id="danhmuc" value = "$pro_type->name">
                                
                                @foreach($cate_pro as $item)
                                    <option
                                    @if($pro_type->cate_id == $item->id)   
                                    {{"selected"}}
                                    @endif
                                    value="{{$item->id}}">{{$item->name}}


                                    </option>
                                    
                                 
                                @endforeach   
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tên Mục</label>
                                 <input class="form-control" name="type_name" placeholder="Điền tên loại sản phẩm" value="{{$pro_type->type_name}}" />
                            </div>
                            <div class="form-group">
                            <label>Hình Ảnh</label>
                            <input type="file" name="image" />
                            @if(isset($error_img))
                                <div class="alert alert-danger">{{$error_img}}</div>
                            @endif
                            <br><img width="200px" src="uploads/2/banner-group-product/{{$pro_type->image}}">
                        </div>
                            <button type="submit" class="btn btn-default">Sửa Loại Sản Phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection