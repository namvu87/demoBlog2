@extends('backend.master')
@section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại bài viết
                            <small>Danh Sách</small>
                        </h1>
                    </div>
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
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Loại Bài Viết</th>
                                <th>Tên Mục Bài Viết</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($type as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->title_type}}</td>
                                <td>{{$item->title}}</td>
                                <td><img width="150px" src="uploads/5/tin-cong-ty/{{$item->image}}"></td>
                             <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/type_news/delete/{{$item->id}}">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/type_news/edit/{{$item->id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
@endsection