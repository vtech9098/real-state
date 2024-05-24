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
        <form action="{{ route('blog.updateblog.page') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="row">
                <div class="col-md-12">
                    <input type='hidden' name='id' value="{{ $blogEdit->id }}" />
                    <div class="form-group">
                        <label for="page_uri">Page builder is not available on this page. <span
                                class="text-red">*</span></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Title<span class="text-red"></span></label>
                        <input type="text" name="title" class="form-control" id="page_uri"
                            value="{{ $blogEdit->title }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Slug<span class="text-red"></span></label>
                        <input type="text" name="slug" class="form-control" id="page_uri"
                            value="{{ $blogEdit->slug }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Short Description</label>
                        <textarea value='' id="breadcrumb_item" name="short_description" class="form-control" rows="3">{{ $blogEdit->short_description }}</textarea>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Long Description</label>
                        <textarea value='' id="breadcrumb_item" name="long_description" class="form-control" rows="3">{{ $blogEdit->long_description }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="col-form-label">Categories</label>
                        @php
                            $blog_cate = explode(',', $blogEdit->category);
                        @endphp
                        <select class="form-control" id="" name="category[]" multiple>
                            @foreach ($blogcat as $bedit)
                                <option {{ in_array($bedit->id, $blog_cate) ? 'selected' : '' }} value="{{ $bedit->id }}">
                                    {{ $bedit->name }}</option>
                            @endforeach
                            {{-- <option value="1">Yes</option>
                            <option value="0">No</option> --}}
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Tags<span class="text-red"></span></label>
                        @php
                            $blog_tag = explode(',', $blogEdit->tags);
                        @endphp
                        <select class="form-control" id="" name="tags[]" multiple>
                            @foreach ($tag as $tags)
                                <option {{ in_array($tags->id, $blog_tag) ? 'selected' : '' }} value="{{ $tags->id }}">{{ $tags->name }}</option>
                            @endforeach
                        </select>

                        {{-- <input type="text" name="tags" class="form-control" id="page_uri"
                            value="{{$blogEdit->tags}}"> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Seo Title<span class="text-red"></span></label>
                        <input type="text" name="seo_title" class="form-control" id="page_uri"
                            value="{{ $blogEdit->seo_title }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Seo Description</label>
                        <textarea value='' id="breadcrumb_item" name="seo_description" class="form-control" rows="3">{{ $blogEdit->seo_description }}</textarea>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Seo Keyword<span class="text-red"></span></label>
                        <input type="text" name="seo_keyword" class="form-control" id="page_uri"
                            value="{{ $blogEdit->seo_keyword }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="custom_breadcrumb_image">Image(size 200 x 200) (.svg, .jpg, .jpeg,
                            .png, .webp, .gif)</label>
                        <input type="file" name="image" class="form-control-file" id="custom_breadcrumb_image" value="{{ $blogEdit->image}}">
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
                        <input type="file" name="seo_image" class="form-control-file" id="custom_breadcrumb_image" value="{{ $blogEdit->seo_image}}">
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
