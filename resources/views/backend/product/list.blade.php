@extends('backend.master')
@section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Thể Loại Sản Phẩm</th>
                                <th>Ảnh</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->product_name}}</td>
                                <td>{{$item->type_name}}</td>
                                <td>{{$item->name}}</td>
                                <td><img width="50px" src=" uploads/2/{{$item->product_name}}/{{$item->image}}"></td>
                                 <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/product/delete/{{$item->id}}">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/product/edit/{{$item->id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
@endsection