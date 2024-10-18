@extends('backend.layouts.master')
@push('styles')
    <link href="{{ asset('backend') }}/plugins/summernote/summernote-lite.min.css" rel="stylesheet">
@endpush
@section('action-button')
    <div class="col-auto float-right ml-auto">
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Website Settings</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="site_name">Website Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="site_name" placeholder="Enter name"
                                    required="" name="site_name" value="{{ $setting->site_name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="site_title">Website Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="site_title" placeholder="Enter title"
                                    required="" name="site_title" value="{{ $setting->site_title }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="phone" placeholder="Enter your phone"
                                    required="" name="phone" value="{{ $setting->phone }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required="" name="email" value="{{ $setting->email }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address"
                                    required="" name="address" value="{{ $setting->address }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="facebook">Facebook Url</label>
                                <input type="text" class="form-control" id="facebook"
                                    placeholder="Enter facebook url" required="" name="facebook"
                                    value="{{ $setting->facebook }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="twitter">Twitter Url</label>
                                <input type="text" class="form-control" id="twitter"
                                    placeholder="Enter twitter url" required="" name="twitter"
                                    value="{{ $setting->twitter }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="linkedin">linkedin Url</label>
                                <input type="text" class="form-control" id="linkedin"
                                    placeholder="Enter linkedin url" required="" name="linkedin"
                                    value="{{ $setting->linkedin }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="instagram">Instagram Url</label>
                                <input type="text" class="form-control" id="instagram"
                                    placeholder="Enter instagram url" required="" name="instagram"
                                    value="{{ $setting->instagram }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="site_logo">Logo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="site_logo" accept="image/*" name="site_logo"
                                    onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="logo">Preview</label>
                                <img src="{{ imageShow($setting->logo) }}" id="profile_preview" class="img-thumbnail"
                                    height="100" width="100" alt="logo">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="favicon">Favicon <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="favicon" accept="image/*" name="favicon"
                                    onchange="document.getElementById('profile_preview_1').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="favicon">Preview</label>
                                <img src="{{ imageShow($setting->favicon) }}" id="profile_preview_1" class="img-thumbnail"
                                    height="100" width="100" alt="favicon">
                            </div>
                                                        
                            <div class="col-md-12 mb-3">
                                <label for="privacy_policy">Privacy Policy <span class="text-danger">*</span></label>
                                <textarea class="form-control privacy_policy" id="privacy_policy" name="privacy_policy" required>{{ $setting->privacy_policy }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="terms_and_conditions">Terms of Service <span class="text-danger">*</span></label>
                                <textarea class="form-control terms_and_conditions" id="terms_and_conditions" name="terms_and_conditions" required>{{ $setting->terms_and_conditions }}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Update Proflie</button>
                        <a href="" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend') }}/plugins/summernote/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.privacy_policy').summernote({
                height: 300,
            });
        });
        $(document).ready(function() {
            $('.terms_and_conditions').summernote({
                height: 300,
            });
        });
    </script>
@endpush
