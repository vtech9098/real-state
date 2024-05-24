@extends('admin.layout')
@section('mainContent')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Setting</h4>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-logo-tab" data-toggle="pill" href="#pills-logo" role="tab"
                            aria-controls="pills-logo" aria-selected="true"> Logo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-favicon-tab" data-toggle="pill" href="#pills-favicon" role="tab"
                            aria-controls="pills-favicon" aria-selected="false">Favicon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-preloader-tab" data-toggle="pill" href="#pills-preloader"
                            role="tab" aria-controls="pills-preloader" aria-selected="false">Preloader</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-general_setting-tab" data-toggle="pill" href="#pills-general_setting"
                            role="tab" aria-controls="pills-general_setting" aria-selected="false">General Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab"
                            aria-controls="pills-seo" aria-selected="false">Seo</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-logo" role="tabpanel"
                        aria-labelledby="pills-header-tab">
                        <div class="row">
                            <div class="col-xl-12 box-margin height-card">
                                <div class="card card-body">
                                    <h4 class="card-title">Header Logo</h4>
                                    <form action="{{ route('admin.setting.header_logo_update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="header_logo">Header Logo (size 128 x 128) (.svg, .jpg,
                                                        .jpeg,
                                                        .png,
                                                        .webp)</label>
                                                    <input type="file" name="header_logo" class="form-control-file"
                                                        id="header_logo">
                                                    <small class="form-text text-muted">You do not have to use the
                                                        recommended sizes.
                                                        However, please use the recommended sizes for your site design to
                                                        look its
                                                        best.</small>
                                                </div>
                                                <div class="height-card box-margin">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="avatar-area text-center">
                                                                <div class="media">
                                                                    <a class="d-block mx-auto" href="#"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        data-original-title="Current Image">
                                                                        <img src="{{ asset('uploads/setting/' . $settings->header_logo) }}"
                                                                            alt="Header Logo">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end card-body-->
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <a href="#" class="btn btn-primary">
                                                    <i class="fa fa-trash"></i> Reset
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 box-margin height-card">
                                <div class="card card-body">
                                    <h4 class="card-title">Footer Logo</h4>
                                    <form action="{{ route('admin.setting.footer_logo') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="footer_logo">Footer (size 128 x 128) (.svg, .jpg, .jpeg,
                                                        .png,
                                                        .webp)</label>
                                                    <input type="file" name="footer_logo" class="form-control-file"
                                                        id="footer_logo">
                                                    <small class="form-text text-muted">You do not have to use the
                                                        recommended sizes.
                                                        However, please use the recommended sizes for your site design to
                                                        look its
                                                        best.</small>
                                                </div>
                                                <div class="height-card box-margin">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="avatar-area text-center">
                                                                <div class="media">
                                                                    <a class="d-block mx-auto" href="#"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        data-original-title="Current Image">
                                                                        <img src="{{ asset('uploads/setting/' . $settings->footer_logo) }}"
                                                                            alt="Footer Logo" style="width:100%">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end card-body-->
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <a href="#" class="btn btn-primary">
                                                    <i class="fa fa-trash"></i> Reset
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-favicon" role="tabpanel" aria-labelledby="pills-favicon-tab">
                        <div class="row">
                            <div class="col-xl-12 box-margin height-card">
                                <div class="card card-body">
                                    <h4 class="card-title">Favicon</h4>
                                    <form action="{{ route('admin.setting.favicon_update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="favicon">Favicon (size 128 x 128) (.svg, .jpg, .jpeg,
                                                        .png,
                                                        .webp)</label>
                                                    <input type="file" name="favicon" class="form-control-file"
                                                        id="favicon">
                                                    <small class="form-text text-muted">You do not have to use the
                                                        recommended sizes.
                                                        However, please use the recommended sizes for your site design to
                                                        look its
                                                        best.</small>
                                                </div>
                                                <div class="height-card box-margin">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="avatar-area text-center">
                                                                <div class="media">
                                                                    <a class="d-block mx-auto" href="#"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        data-original-title="Current Image">
                                                                        <img src="{{ asset('uploads/setting/' . $settings->favicon) }}"
                                                                            alt="Favicon" style="width:100%; ">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end card-body-->
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <a href="#" class="btn btn-primary">
                                                    <i class="fa fa-trash"></i> Reset
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-preloader" role="tabpanel"
                        aria-labelledby="pills-preloader-tab">
                        <div class="row">
                            <div class="col-xl-12 box-margin height-card">
                                <div class="card card-body">
                                    <h4 class="card-title">Preloader</h4>
                                    <form action="{{ route('admin.setting.preloader_update') }}" method="POST">
                                        {{-- <input type="hidden" name="id" value="{{ $settings->id }}"> --}}
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label for="enable_preloader" class="col-form-label">Preloader
                                                    </label>
                                                    <select name="enable_preloader" id="status" class="form-control">
                                                        <option
                                                            {{ $settings->enable_preloader == 'enable' ? 'selected' : '' }}
                                                            value="enable">Enable
                                                        </option>
                                                        <option
                                                            {{ $settings->enable_preloader == 'disable' ? 'selected' : '' }}
                                                            value="disable">Disable
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-general_setting" role="tabpanel"
                        aria-labelledby="pills-general_setting-tab">
                        <div class="row">
                            <div class="col-xl-12 box-margin height-card">
                                <div class="card card-body">
                                    <h4 class="card-title">Copyright</h4>
                                    <form action="{{ route('admin.setting.setting_update') }}" method="POST">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $settings->id }}">
                                                <label for="copyright">Copyright</label>
                                                <input type="text" name="copyright" class="form-control"
                                                    id="copyright" value="{{ $settings->copyright }}">
                                                <small class="form-text text-muted">Recommended tags
                                                    <span class="text-danger font-weight-bold custom-tag mr-1"
                                                        onclick="insertTag('a', 'copyright')">&lt;a
                                                        href=""&gt;</span>
                                                    <span class="text-danger font-weight-bold custom-tag mr-1"
                                                        onclick="insertTag('br', 'copyright')">&lt;br&gt;</span>
                                                    <span class="text-danger font-weight-bold custom-tag mr-1"
                                                        onclick="insertTag('b', 'copyright')">&lt;b&gt;</span>
                                                    <span class="text-danger font-weight-bold custom-tag mr-1"
                                                        onclick="insertTag('i', 'copyright')">&lt;i&gt;</span>
                                                    <span class="text-danger font-weight-bold custom-tag mr-1"
                                                        onclick="insertTag('span', 'copyright')">&lt;span&gt;</span>
                                                    <span class="text-danger font-weight-bold custom-tag mr-1"
                                                        onclick="insertTag('p', 'copyright')">&lt;p&gt;</span></small>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="about_us">About Us</label>
                                                <textarea name="about_us" class="form-control" id="about_us" rows="3">{{ $settings->about_us }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea name="address" class="form-control" id="address" rows="3">{{ $settings->address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input name="phone" class="form-control"
                                                    id="phone"value="{{ $settings->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="email" class="form-control"
                                                    id="email"value="{{ $settings->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="site_title">Site Title</label>
                                                <input type="text" name="site_title"
                                                    value="{{ $settings->site_title }}" class="form-control"
                                                    id="site_title">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
                        <div class="row">
                            <div class="col-xl-12 box-margin height-card">
                                <div class="card card-body">
                                    <h4 class="card-title">Seo</h4>
                                    <form action="{{ route('admin.setting.seo_update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="{{ $settings->id }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="seo_title">Seo Title</label>
                                                    <input type="text" name="seo_title" class="form-control"
                                                        id="seo_title" value="{{ $settings->seo_title }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="seo_description">Seo Description</label>
                                                    <textarea name="seo_description" class="form-control" id="seo_description" rows="3">{{ $settings->seo_description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="seo_image">Seo Image (size 128 x 128) (.svg, .jpg, .jpeg,
                                                        .png,
                                                        .webp)</label>
                                                    <input type="file" name="seo_image" class="form-control-file"
                                                        id="seo_image" value="{{ $settings->seo_image }}">
                                                    <small class="form-text text-muted">You do not have to use the
                                                        recommended sizes.
                                                        However, please use the recommended sizes for your site design to
                                                        look its
                                                        best.</small>
                                                    <div class="height-card box-margin">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="avatar-area text-center">
                                                                    <div class="media">
                                                                        <a class="d-block mx-auto" href="#"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            data-original-title="Current Image">
                                                                            <img src="{{ asset('uploads/setting/' . $settings->seo_image) }}"
                                                                                alt="Seo Images" style="width:100%">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!--end card-body-->
                                                            </div>
                                                        </div>
                                                        <!--end card-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="seo_keyword">Seo Keyword (Separate with commas)</label>
                                                    <textarea name="seo_keywords" class="form-control" id="seo_keywords" rows="3">{{ $settings->seo_keywords }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
