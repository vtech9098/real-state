@extends('admin.layout')
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Property Table</h3>
                    <div>
                        <a href="{{ route('admin.property.create') }}" class="btn btn-primary has-ripple"> Add +<span
                                class="ripple ripple-animate"
                                style="height: 81.1125px; width: 81.1125px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -24.8563px; left: -5.24375px;"></span></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>name</th>
                                <th>Type</th>
                                <th>Descripton</th>
                                <th>Main Image</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Property Location</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->name }} </td>
                                    <td>{{ $property->type }}</td>
                                    <td>{{ $property->description }}</td>
                                    <td>{{ $property->main_image }}</td>
                                    <td>{{ $property->state }}</td>
                                    <td>{{ $property->city }}</td>
                                    <td>{{ $property->property_location }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.property.edit', $property->id) }}"
                                            class="btn btn-primary">
                                            <i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.property.destroy', $property->id) }}"
                                            class="btn btn-danger">
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
