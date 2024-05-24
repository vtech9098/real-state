@extends('admin/layout')
@section('mainContent')
    <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">

            <h4 class="card-title">Slider</h4>
        </div>

        <form class="forms-sample" method="POST" action="{{route('slider.update.page')}}" enctype="multipart/form-data">
            @csrf
            <input type='hidden' name='id' value="{{ $slider_edit->id }}" />
            <div class="form-group">
                <label for="url">Slider Name<span class="text-red">*</span></label>
                <input type="text" name="slider_name" class="form-control" id="url" placeholder="slider name"
                    value="{{ $slider_edit->slider_name }}">
            </div>
            <div class="form-group">
                <label for="url">Slider Description<span class="text-red">*</span></label>
                <textarea class="form-control" name="slider_description">{{ $slider_edit->slider_description }}</textarea>
            </div>


            <div class="form-group">
                <label for="icon">Slider Image<span class="text-red">*</span></label>
                <input type="file" name="slider_image" class="form-control" id="icon"
                    value="{{ $slider_edit->slider_image}}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>

        </form>

        

    </div>
@endSection
