@extends('admin/layout')
@section('mainContent')
   <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">
            <h4 class="card-title">Blog</h4>
            {{-- <div>
                <a href="https://engineershub.org.in/admin/page-builder/create" class="btn btn-primary"><i
                        class="fas fa-angle-left"></i> Back</a>
            </div> --}}
        </div>
         
        <form action="{{route('blog.insert.page')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Title<span class="text-red"></span></label>
                        <input type="text" name="title" class="form-control" id="page_uri"
                            value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Slug<span class="text-red"></span></label>
                        <input type="text" name="slug" class="form-control" id="page_uri"
                            value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Short Description</label>
                        <textarea value='' id="breadcrumb_item" name="short_description" class="form-control"
                            rows="3"></textarea>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Long Description</label>
                        <textarea value='' id="breadcrumb_item" name="long_description" class="form-control"
                            rows="3"></textarea>
                        
                    </div>
                </div>
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="col-form-label">Categaries</label>
                        <select class="form-control" id="" name="category[]" multiple>
                        @foreach ( $blogcat as $show)
                            <option value="{{$show->id}}" >{{ $show->name}}</option>
                            {{-- <option value="1">Yes</option>
                            <option value="0">No</option> --}}
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Tags<span class="text-red"></span></label>
                        <select class="form-control" id="" name="tags[]" multiple>
                        @foreach ( $tag as $tagshow)
                            <option value="{{$tagshow->id}}" >{{ $tagshow->name}}</option>
                            {{-- <option value="1">Yes</option>
                            <option value="0">No</option> --}}
                        @endforeach
                        </select>

                        {{-- <input type="text" name="tags" class="form-control" id="page_uri"
                            value=""> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Seo Title<span class="text-red"></span></label>
                        <input type="text" name="seo_title" class="form-control" id="page_uri"
                            value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Seo Description</label>
                        <textarea value='' id="breadcrumb_item" name="seo_description" class="form-control"
                            rows="3"></textarea>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Seo Keyword<span class="text-red"></span></label>
                        <input type="text" name="seo_keyword" class="form-control" id="page_uri"
                            value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="custom_breadcrumb_image">Image(size 200 x 200) (.svg, .jpg, .jpeg,
                            .png, .webp, .gif)</label>
                        <input type="file" name="image" class="form-control-file"
                            id="custom_breadcrumb_image" Required>
                        <small id="custom_breadcrumb_image" class="form-text text-muted">You do not have to use the
                            recommended sizes. However, please use the recommended sizes for your site design to look its
                            best.</small>
                    </div>
                    <!--end col-->
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="custom_breadcrumb_image">Seo Image(size 200 x 200) (.svg, .jpg, .jpeg,
                            .png, .webp, .gif)</label>
                        <input type="file" name="seo_image" class="form-control-file"
                            id="custom_breadcrumb_image" Required>
                        <small id="custom_breadcrumb_image" class="form-text text-muted">You do not have to use the
                            recommended sizes. However, please use the recommended sizes for your site design to look its
                            best.</small>
                    </div>
                    <!--end col-->
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </form>

        <!-- Modal -->
    </div>
@endSection