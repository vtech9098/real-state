@extends('admin/layout')
@section('mainContent')
    <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-body">
            <div class="d-md-flex justify-content-between align-items-center mb-20">
                <h4 class="card-title">Property</h4>
                <div>
                    <a href="{{ route('admin.property.show') }}" class="btn btn-primary has-ripple"><i
                            class="fas fa-angle-left"></i>
                        Back<span class="ripple ripple-animate"
                            style="height: 81.1125px; width: 81.1125px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -24.8563px; left: -5.24375px;"></span></a>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name<span class="text-red">*</span></label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug<span class="text-red">*</span></label>
                        <input type="text" name="slug" class="form-control" id="slug"
                            value="{{ old('slug') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="type">Type<span class="text-red"></span></label>
                        <select name="type" id="" value="{{ old('type') }}" class="form-control">
                            <option value="sale">Sale</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea value={{ old('description') }}id="description" name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="is_featured">Is Featured<span class="text-red"></span></label>
                        <select class="form-control" name="is_featured" id="is_featured">
                            <option value="0">Enable</option>
                            <option value="1">Disabled</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="main_image">Main Image<span class="text-red"></span></label>
                        <input type="file" name="main_image" class="form-control" id="main_image"
                            value="{{ old('main_image') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="other_image">Other Image<span class="text-red"></span></label>
                        <input type="file" name="other_images" class="form-control" id="other_images" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Country<span class="text-red"></span></label>
                        <input type="text" name="country" class="form-control" id="country"
                            value="{{ old('country') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state">State<span class="text-red">*</span></label>
                        <input type="text" name="state" class="form-control" id="state"
                            value="{{ old('state') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City<span class="text-red"></span></label>
                        <input type="text" name="city" class="form-control" id="city"
                            value="{{ old('city') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="property_location">Property Location<span class="text-red"></span></label>
                        <input type="text" name="property_location" class="form-control" id="property_location"
                            value="{{ old('property_location') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <h3 class="card-title p-0 m-1">Property Details</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="longitude">Longitude<span class="text-red"></span></label>
                        <input type="text" name="longitude" class="form-control" id="logitude"
                            value="{{ old('longitude') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="latitude">Latitude<span class="text-red"></span></label>
                        <input type="text" name="latitude" class="form-control" id="latitude"
                            value="{{ old('latitude') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_of_bedrooms">No. Of Bedrooms<span class="text-red"></span></label>
                        <input type="number" name="no_of_bedrooms" class="form-control" id="no_of_bedrooms"
                            value="{{ old('no_of_bedrooms') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_of_bathrooms">No. Of Bathrooms<span class="text-red"></span></label>
                        <input type="number" name="no_of_bathrooms" class="form-control" id="no_of_bathrooms"
                            value="{{ old('no_of_bathrooms') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_of_floors">No. Of Floors<span class="text-red"></span></label>
                        <input type="number" name="no_of_floors" class="form-control" id="no_of_floors"
                            value="{{ old('no_of_floors') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="square_meter">Square Meter<span class="text-red"></span></label>
                        <input type="number" name="square_meter" class="form-control" id="square_meter"
                            value="{{ old('square_meter') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Price">Price<span class="text-red"></span></label>
                        <input type="text" name="price" class="form-control" id="price"
                            value="{{ old('price') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Facilities">Facilities<span class="text-red"></span></label>
                        <select class="form-control" id="facilities" name="facilities[]" multiple>
                            @foreach ($ami as $show)
                                <option value="{{ $show->id }}">{{ $show->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="near_by">Near by<span class="text-red"></span></label>
                        <select class="form-control" name="features" id="features">
                            @foreach ($near as $show)
                                <option value="{{ $show->id }}">{{ $show->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status<span class="text-red"></span></label>
                        <select class="form-control" name="status" id="status">
                            <option value="Enable">Enable</option>
                            <option value="Disable">Disable</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Unique_id">Unique id<span class="text-red"></span></label>
                        <input type="text" name="unique_id" class="form-control" id="unique_id" value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="category">Category<span class="text-red"></span></label>
                        <select class="form-control" id="category_ids" name="category_ids">
                            @foreach ($category as $show)
                                <option value="{{ $show->id }}">{{ $show->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <h3 class="card-title p-0 m-1">Seo</h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="seo_title">Seo Title<span class="text-red"></span></label>
                        <input type="text" name="seo_title" class="form-control" id="seo_title"
                            value="{{ old('seo_title') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="seo_description">Seo Description<span class="text-red"></span></label>
                        <input type="text" name="seo_description" class="form-control" id="seo_description"
                            value="{{ old('seo_description') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="seo_image">Seo Image<span class="text-red"></span></label>
                        <input type="file" name="seo_image" class="form-control" id="seo_image"
                            value="{{ old('seo_image') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Modal -->
    </div>
@endSection
