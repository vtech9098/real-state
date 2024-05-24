@extends('admin.layout')
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Social Media Table
                        <a href="{{ route('admin.social_link.create') }}" class="btn btn-primary float-right" style="text-align-right">
                            Add <i class="fa fa-plus" ></i>
                        </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Icon</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($social_link as $sociallink)
                                <tr class="table">
                                    <td>
                                        {{ $sociallink->id }}
                                    </td>
                                    <td>
                                        {{ $sociallink->icon }}
                                    </td>
                                    <td>
                                        {{ $sociallink->url }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.social_link.edit', $sociallink->id) }}"
                                            class="btn btn-primary">
                                            <i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.social_link.destory', $sociallink->id) }}"
                                            class="btn btn-danger" onclick="return confirm('Are you sure want to Delete')">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
