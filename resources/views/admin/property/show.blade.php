@extends('admin.layout')
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>name</th>
                                <th>Type</th>
                                <th>Slug</th>
                                <th>Descripton</th>
                                <th>Is_featured</th>
                                <th>Main Image</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Property Location</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>No. Of Bedrooms</th>
                                <th>No. Of Bathrooms</th>
                                <th>No. Of Floors</th>
                                <th>Square Meter</th>
                                <th>Price</th>
                                <th>Facilities</th>
                                <th>Features</th>
                                <th>Seo Title</th>
                                <th>Seo Description</th>
                                <th>Seo Image</th>
                                <th>Status</th>
                                <th>Category ids</th>
                                <th>Unique id</th>
                                <th>Project id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->name }} </td>
                                    <td>{{ $property->type }}</td>
                                    <td>{{ $property->slug }}</td>
                                    <td>{{ $property->description }}</td>
                                    <td>{{ $property->is_featured }}</td>
                                    <td>{{ $property->main_image }}</td>
                                    <td>{{ $property->country }}</td>
                                    <td>{{ $property->state }}</td>
                                    <td>{{ $property->city }}</td>
                                    <td>{{ $property->property_location }}</td>
                                    <td>{{ $property->longitude }}</td>
                                    <td>{{ $property->latitude }}</td>
                                    <td>{{ $property->no_of_bedrooms }}</td>
                                    <td>{{ $property->no_of_bathroom }}</td>
                                    <td>{{ $property->no_of_floors }}</td>
                                    <td>{{ $property->square_meter }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->facilities }}</td>
                                    <td>{{ $property->features }}</td>
                                    <td>{{ $property->seo_title }}</td>
                                    <td>{{ $property->seo_description }}</td>
                                    <td>{{ $property->seo_image }}</td>
                                    <td>{{ $property->status }}</td>
                                    <td>{{ $property->category_ids }}</td>
                                    <td>{{ $property->unique_id }}</td>
                                    <td>{{ $property->project_id }}</td>
                                    <td>
                                        <a href="{{ route('admin.property.edit', $property->id) }}" class="btn btn-primary">
                                            <i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-danger">
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
