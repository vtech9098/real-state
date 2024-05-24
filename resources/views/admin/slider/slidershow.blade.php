@extends('admin/layout')
@section('mainContent')
    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Slider Name</th>
                        <th>Slider Description</th>
                        <th>Slider Image</th>
                        <th colspan='2'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slider_show as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->slider_name }}</td>
                            <td>{{ $slider->slider_description }}</td>
                            <td><img src="{{ asset('uploads/aminitie/' . $slider->slider_image) }}" alt='Image' width="100px"></td>
                            <td>
                                <div>
                                    <a href="{{ route('slider.edit.page', $slider->id) }}" class="mr-2">
                                        <i class="fa fa-edit text-info font-18"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('slider.delete.page', $slider->id) }}" class="mr-2" onclick="return confirm('Are You sure Want To delete')">
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
