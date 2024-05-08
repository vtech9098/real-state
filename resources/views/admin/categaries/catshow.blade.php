@extends('admin/layout')
@section('mainContent')
    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>On Home</th>
                        <th>Icon</th>
                        <th>Image</th>
                        <th colspan='2'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($showCategaries as $catshow)
                        <tr>
                            <td>{{ $catshow->id }}</td>
                            <td>{{ $catshow->name }}</td>
                            <td>{{ $catshow->slug }}</td>
                            <td>{{ $catshow->description }}</td>
                            <td>{{ $catshow->on_home }}</td>
                            <td><img src="{{ asset('uploads/aminitie/' . $catshow->icon) }}" alt='Image' width="100px"></td>
                            <td><img src="{{ asset('uploads/aminitie/' . $catshow->image) }}" alt='Image' width="100px"></td>

                            <td>
                                <div>
                                    <a href="{{ route('categaries.edit.page', $catshow->id) }}" class="mr-2">
                                        <i class="fa fa-edit text-info font-18"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('categaries.destroy.page', $catshow->id) }}" class="mr-2" onclick="return confirm('Are You sure Want To delete')">
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
