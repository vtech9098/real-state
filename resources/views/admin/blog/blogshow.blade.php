@extends('admin/layout')
@section('mainContent')
    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Categaries</th>
                        <th>Tags</th>
                        <th>Image</th>
                        <th>Seo Image</th>
                        <th colspan='2'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $blogShow as $blogshow)
                        <tr>
                            <td>{{ $blogshow->id }}</td>
                            <td>{{ $blogshow->title }}</td>
                            <td>{{ $blogshow->category_name}}</td>
                            <td>{{ $blogshow->tag_name}}</td>
                            <td><img src="{{ asset('uploads/aminitie/'.$blogshow->image)}}" alt="" style='width:100px;'></td>
                            <td><img src="{{ asset('uploads/aminitie/'.$blogshow->seo_image)}}" alt="" style='width:100px;'></td>
                           
                            <td>
                                <div>
                                    <a href="{{ route('blog.editblog.page', $blogshow->id) }}" class="mr-2">
                                        <i class="fa fa-edit text-info font-18"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('blog.deleteblog.page', $blogshow->id) }}" class="mr-2" onclick="return confirm('Are You sure Want To delete')">
                                        <i class="fa fa-delete fa-trash text-info font-18"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endSection
