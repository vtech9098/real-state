@extends('admin/layout')
@section('mainContent')
    <div class="card card-body">
        <div class="d-md-flex justify-content-between align-items-center mb-20">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <h4 class="card-title">Social Link</h4>
            <div>
                <a href="" class="btn btn-primary"><i class="fas fa-angle-left"></i> Back</a>
            </div>
        </div>

        <form class="forms-sample" method="POST" action="{{ route('admin.social_link.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="icon">Icon<span class="text-red">*</span></label>
                <input type="file" name="icon" class="form-control" id="icon" value="">
            </div>

            <div class="form-group">
                <label for="url">Url<span class="text-red">*</span></label>
                <input type="link" name="url" class="form-control" id="url" placeholder="url">
            </div>
            <div class="form-group">
                <label for="share_url">Share_Url<span class="text-red">*</span></label>
                <input type="link" name="share_url" class="form-control" id="share_url" placeholder="share_url">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>

        </form>


    </div>
@endSection
