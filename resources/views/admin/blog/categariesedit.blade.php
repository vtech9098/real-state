@extends('admin/layout')
@section('mainContent')
   <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">
            <h4 class="card-title">Blog Categaries Page</h4>
            {{-- <div>
                <a href="https://engineershub.org.in/admin/page-builder/create" class="btn btn-primary"><i
                        class="fas fa-angle-left"></i> Back</a>
            </div> --}}
        </div>
         
        <form action="{{route('blog.update.page')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="row">
                <div class="col-md-12">
                    <input type='hidden' name='id' value="{{ $catEdit->id }}" />
                    <div class="form-group">
                        <label for="page_uri">Page builder is not available on this page. <span
                                class="text-red">*</span></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Name<span class="text-red">*</span></label>
                        <input type="text" name="name" class="form-control" id="page_uri"
                            value="{{ $catEdit->name}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_uri">Slug<span class="text-red"></span></label>
                        <input type="text" name="slug" class="form-control" id="page_uri"
                            value="{{ $catEdit->slug}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="breadcrumb_item">Description</label>
                        <textarea value='' id="breadcrumb_item" name="description" class="form-control"
                            rows="3">{{ $catEdit->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </form>

        <!-- Modal -->
       

    </div>
@endSection