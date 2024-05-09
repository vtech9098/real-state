@extends('admin/layout')
@section('mainContent')
    <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">
            <h4 class="card-title">Near By</h4>
<<<<<<< HEAD
=======
            {{-- <div>
                <a href="https://engineershub.org.in/admin/page-builder/create" class="btn btn-primary"><i
                        class="fas fa-angle-left"></i> Back</a>
            </div> --}}
>>>>>>> 2e623520926cc55919d7daf75b05d5aba7277c1c
        </div>
        <form action="{{ route('nearby.update.page') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="row">
                <div class="col-md-12">
                    <input type='hidden' name='id' value="{{ $neareEdit->id }}" />
                    <div class="form-group">
                        <label for="page_uri">Page builder is not available on this page. <span
                                class="text-red">*</span></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Name<span class="text-red">*</span></label>
                        <input type="text" name="name" class="form-control" id="page_uri"
                            value="{{ $neareEdit->name }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="custom_breadcrumb_image">Icon (size 200 x 200) (.svg, .jpg, .jpeg,
                            .png, .webp, .gif)</label>
                        <input type="file" name="icon" class="form-control-file" id="custom_breadcrumb_image">
                        <small id="custom_breadcrumb_image" class="form-text text-muted">You do not have to use the
                            recommended sizes. However, please use the recommended sizes for your site design to look its
                            best.</small>
                    </div>

                    <!--end col-->
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="custom_breadcrumb_image">Image (size 1920 x 400) (.svg, .jpg, .jpeg,
                            .png, .webp, .gif)</label>
                        <input type="file" name="image" class="form-control-file" id="custom_breadcrumb_image">
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
