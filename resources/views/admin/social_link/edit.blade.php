@extends('admin/layout')
@section('mainContent')
    <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">
            <h4 class="card-title">Social Link</h4>
            <div>
                <a href="{{ route('admin.social_link.show') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i>
                    Back</a>
            </div>
        </div>

        <form class="forms-sample" method="POST" action="{{ route('admin.social_link.update') }}"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $social_link->id }}">
            <div class="form-group">
                <label for="icon">Icon<span class="text-red">*</span></label>
                <input type="file" name="icon" class="form-control" id="icon" value="{{ $social_link->icon }}">
            </div>

            <div class="form-group">
                <label for="url">Url<span class="text-red">*</span></label>
                <input type="text" name="url" class="form-control" id="url" value="{{ $social_link->url }}">
            </div>
            <div class="form-group">
                <label for="share_url">share Url<span class="text-red">*</span></label>
                <input type="share_url" name="share_url" class="form-control" id="share_url"
                    value="{{ $social_link->share_url }}">
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>

        </form>


    </div>
@endSection
