@extends('backend.master')
@section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách
                            <small>Loại sản phẩm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã</th>
                                <th>Tên Loại Sản Phẩm</th>
                                <th>Tên Danh Mục</th>
                                <th>Ảnh</th>

                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($type as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->type_name}}</td>
                                <td>{{$item->name}}</td>
                                
                                <td><img width="150px" src="uploads/7/product/{{$item->image}}"></td>

                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/product_type/delete/{{$item->id}}">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/product_type/edit/{{$item->id}}">Edit</a></td>
                            </tr>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
@endsection