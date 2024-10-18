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
                    <h5 class="card-title mb-0">Update Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter name"
                                    required="" name="first_name" value="{{ $profile->first_name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter title"
                                    required="" name="last_name" value="{{ $profile->last_name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="phone" placeholder="Enter your phone"
                                    required="" name="phone" value="{{ $profile->phone }}">
                            </div>
                            {{-- <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required="" name="email" value="{{ $profile->email }}">
                            </div> --}}
                            <div class="col-md-4 mb-3">
                                <label for="profile">Profile Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="profile" accept="image/*" name="profile"
                                    onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="profile">Preview</label>
                                <img src="{{ $profile->image }}" id="profile_preview" class="img-thumbnail"
                                    height="100" width="100" alt="">
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