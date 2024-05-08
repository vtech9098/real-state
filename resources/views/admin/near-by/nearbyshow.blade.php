@extends('admin/layout')
@section('mainContent')
    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Image</th>
                        <th colspan='2'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($near_by as $near)
                        <tr>
                            <td>{{ $near->id }}</td>
                            <td>{{ $near->name }}</td>
                            <td><img src="{{ asset('uploads/aminitie/' . $near->icon) }}" alt='Image' width="100px"></td>
                            <td><img src="{{ asset('uploads/aminitie/' . $near->image) }}" alt='Image' width="100px"></td>

                            <td>
                                <div>
                                    <a href="{{ route('nearby.edit.page', $near->id) }}" class="mr-2">
                                        <i class="fa fa-edit text-info font-18"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('nearby.delete.page', $near->id) }}" class="mr-2" onclick="return confirm('Are You sure Want To delete')">
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
