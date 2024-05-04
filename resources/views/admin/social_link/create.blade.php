@extends('admin.layout.layout')
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
                <a href="https://engineershub.org.in/admin/page-builder/create" class="btn btn-primary"><i
                        class="fas fa-angle-left"></i> Back</a>
            </div>
            <form class="forms-sample" method="POST" action="{{ route('social_link.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Icon<span class="text-red">*</span></label>
                    <input type="file" name="icon" class="file-upload-default" value="{{ old('icon') }}">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled=""
                            placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="name">Link<span class="text-red">*</span></label> <input type="text"
                            name="link" class="form-control" id="link" placeholder="Link">
                    </div>
                    <div class="form-group">
                        <label for="status">Status<span class="text-red">*</span></label> <select class="form-control"
                            id="Status" name="status">
                            <option value="1">Enable</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
    </div>
@endsection
