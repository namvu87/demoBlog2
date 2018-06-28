@extends('backend.master')
@section('content')
   <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh mục sản phẩm
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
                        <form action="admin/categoryproduct/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />

                            <div class="form-group">
                                <label>Tên Thể Loại</label>
                                <input class="form-control" name="name" placeholder="Nhập tên thể loại"   />
                            </div>
                            
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="file" name="image" />
                                 @if(isset($error_img))
                                    <div class="alert alert-danger">{{$error_img}}</div>
                                @endif
                            </div>
                         
                            
                           <div class="form-group">
                                <label>Icon</label>
                                <input type="file" name="fImages">
                                 @if(isset($error_img))
                                    <div class="alert alert-danger">{{$error_img}}</div>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Thêm Thể Loại</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection