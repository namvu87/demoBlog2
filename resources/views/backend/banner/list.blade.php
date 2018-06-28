@extends('backend.master')
@section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Banner
                            <small>List</small>
                        </h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Đường dẫn</th>
                                <th>Đường dẫn mobile</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banner as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td><img width="150px" src="uploads/2/page-templates/home-1/{{$item->image}}"></td>
                                <td><img width="150px" src="uploads/2/page-templates/home-1/{{$item->url_mobile}}"></td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                    <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/banner/delete/{{$item->id}}">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/banner/edit/{{$item->id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
@endsection