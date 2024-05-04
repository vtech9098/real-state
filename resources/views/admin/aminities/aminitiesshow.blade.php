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
                    @foreach ($aminities_show as $show)
                        <tr>
                            <td>{{ $show->id }}</td>
                            <td>{{ $show->name }}</td>
                            <td><img src="{{ asset('uploads/aminitie/' . $show->icon) }}" alt='Image' width="100px"></td>
                            <td><img src="{{ asset('uploads/aminitie/' . $show->image) }}" alt='Image' width="100px"></td>

                            <td>
                                <div>
                                    <a href="{{ route('aminities.edit.page', $show->id) }}" class="mr-2">
                                        <i class="fa fa-edit text-info font-18"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('aminities.delete.page', $show->id) }}" class="mr-2">
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
