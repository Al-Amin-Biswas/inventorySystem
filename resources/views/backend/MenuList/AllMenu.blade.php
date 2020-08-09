@extends('backend/index')
@section('dash_content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Menu</h3>
                        <ul class="pagination pagination-sm m-0 float-right">
                            <a href="add_menu" type="button" class="btn btn-block btn-info btn-sm">Add Menu</a>
                        </ul>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Progress</th>
                                <th style="width: 110px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{URL::to('edit/menu/'.$row->id)}}"><span class="badge bg-primary">Edit</span></a>
                                    <a href="{{url('delete/menu'.$row->id)}}"><span class="badge bg-danger">Delete</span></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-left">
                            <a href="{{url('add_menu')}}" type="button" class="btn btn-block btn-info btn-sm">Add Menu</a>
                        </ul>
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            {{$result->links()}}
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
