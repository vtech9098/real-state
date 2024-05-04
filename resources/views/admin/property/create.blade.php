@extends('admin/layout')
@section('mainContent')
    <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">
            <h4 class="card-title">Property</h4>
            <div>
                <a href="https://engineershub.org.in/admin/page-builder/create" class="btn btn-primary"><i
                        class="fas fa-angle-left"></i> Back</a>
            </div>
        </div>
        <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Name<span class="text-red">*</span></label>
                        <input type="text" name="name" class="form-control" id="name" value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="slug">Slug<span class="text-red">*</span></label>
                        <input type="text" name="slug" class="form-control" id="slug" value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="type">Type<span class="text-red"></span></label>
                        <input type="text" name="type" class="form-control" id="type" value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea value='' id="description" name="description" class="form-control" rows="3"></textarea>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="is_featured">Is Featured<span class="text-red"></span></label>
                    <select class="form-control" name="is_featured" id="is_featured">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="main_image">Main Image<span class="text-red"></span></label>
                    <input type="file" name="main_image" class="form-control" id="main_image" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="other_image">Other Image<span class="text-red"></span></label>
                    <input type="file" name="other_images" class="form-control" id="other_images" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="country">Country<span class="text-red"></span></label>
                    <select class="form-control" name="country" id="country">
                        <option value="india">india</option>
                        <option value="uk">uk</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="state">Status<span class="text-red"></span></label>
                    <input type="text" name="state" class="form-control" id="state" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="city">City<span class="text-red"></span></label>
                    <input type="text" name="city" class="form-control" id="city">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="property_location">Property Location<span class="text-red"></span></label>
                    <input type="text" name="property_location" class="form-control" id="property_location"
                        value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="longitude">Longitude<span class="text-red"></span></label>
                    <input type="text" name="longitude" class="form-control" id="logitude" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="latitude">Latitude<span class="text-red"></span></label>
                    <input type="text" name="latitude" class="form-control" id="latitude" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="no_of_bedrooms">No. Of Bedrooms<span class="text-red"></span></label>
                    <input type="text" name="no_of_bedrooms" class="form-control" id="no_of_bedrooms"
                        value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="no_of_floors">No. Of Floors<span class="text-red"></span></label>
                    <input type="text" name="no_of_floors" class="form-control" id="no_of_floors" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="no_of_bathrooms">No. Of Bathrooms<span class="text-red"></span></label>
                    <input type="text" name="no_of_bathrooms" class="form-control" id="no_of_bathrooms"
                        value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="square_meter">Square Meter<span class="text-red"></span></label>
                    <input type="text" name="square_meter" class="form-control" id="square_meter" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="Price">Price<span class="text-red"></span></label>
                    <input type="text" name="price" class="form-control" id="price" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="Facilities">Facilities<span class="text-red"></span></label>
                    <input type="text" name="facilities" class="form-control" id="facilities" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="features">Features<span class="text-red"></span></label>
                    <input type="text" name="features" class="form-control" id="features" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="seo_title">Seo Title<span class="text-red"></span></label>
                    <input type="text" name="seo_title" class="form-control" id="seo_title" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="seo_description">Seo Description<span class="text-red"></span></label>
                    <input type="text" name="seo_description" class="form-control" id="seo_description"
                        value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="seo_image">Seo Image<span class="text-red"></span></label>
                    <input type="file" name="seo_image" class="form-control" id="seo_image" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="status">Status<span class="text-red"></span></label>
                    <select class="form-control" name="status" id="status">
                        <option value="Enable"></option>
                        <option value="Disable">/</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="category">Category id<span class="text-red"></span></label>
                    <input type="text" name="category_ids" class="form-control" id="category_ids" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="Unique_id">Unique id<span class="text-red"></span></label>
                    <input type="text" name="unique_id" class="form-control" id="unique_id" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="project_id">Project id<span class="text-red"></span></label>
                    <input type="text" name="project_id" class="form-control" id="project_id" value="">
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
