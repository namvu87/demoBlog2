@extends('backend.master')
@section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh mục sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã TL</th>
                                <th>Tên danh mục sản phẩm</th>
                                <th>slug</th>
                                <th>Trạng thái</th>

                                <th>image</th>
                                <th>icon</th>

                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cat_pro as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->status}}</td>

                                 <td><img width="150px" src="uploads/2/banner-group-product/{{$item->image}}"></td>
                             <td><img width="150px" src="uploads/2/banner-group-product/mobile-{{$item->icon}}"></td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/categoryproduct/delete/{{$item->id}}">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/categoryproduct/edit/{{$item->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
@endsection