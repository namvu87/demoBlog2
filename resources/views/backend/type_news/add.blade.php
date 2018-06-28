@extends('backend.master')
@section('content')
   <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
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
                      <form action="admin/type_news/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                             <div class="form-group">
                                <label>Danh mục bài viết</label>
                                <select class="form-control" name="category_news" id="theloai">
                                @foreach($cate_news as $item) 
                                <option value="{{$item->id}}">{{$item->title}}</option>
                                
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề Bài Viết</label>
                                <input class="form-control" name="title_type" placeholder="Nhập tên tiêu đề" />
                            </div>
                           
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                           
                             <div class="form-group">
                                <label>Đường dẫn ảnh</label>
                                 <input type="file" name="image" />
                                 @if(isset($error_img))
                                    <div class="alert alert-danger">{{$error_img}}</div>
                                @endif
                            </div>
                           
                         
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection