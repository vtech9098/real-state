@extends('admin/layout')
@section('mainContent')
    <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">

            <h4 class="card-title">Slider</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="forms-sample" method="POST" action="{{ route('slider.store.page') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="url">Slider Name<span class="text-red">*</span></label>
                <input type="text" name="slider_name" class="form-control" id="url" placeholder="slider name"
                    value="{{ old('slider_name') }}">
            </div>
            <div class="form-group">
                <label for="url">Slider Description<span class="text-red">*</span></label>
                <textarea class="form-control" name="slider_description"></textarea>
            </div>


            <div class="form-group">
                <label for="icon">Slider Image<span class="text-red">*</span></label>
                <input type="file" name="slider_image" class="form-control" id="icon"
                    value="{{ old('slider_image') }}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>

        </form>

        

    </div>
@endSection
