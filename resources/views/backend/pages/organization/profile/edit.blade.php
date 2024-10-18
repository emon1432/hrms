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
                    <form action="{{ route('organization-profile.update', $organization->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"
                                    required="" name="name" value="{{ $organization->name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address"
                                    required="" name="address" value="{{ $organization->address }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="profile">Company Logo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="profile" accept="image/*" name="profile"
                                    onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="profile">Preview</label>
                                <img src="{{ imageShow($organization->logo) }}" id="profile_preview" class="img-thumbnail"
                                    height="100" width="100" alt="{{ $organization->name }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="profile">Banner Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="profile" accept="image/*" name="profile"
                                    onchange="document.getElementById('profile_preview1').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="profile">Preview</label>
                                <img src="{{ imageShow($organization->banner) }}" id="profile_preview1" class="img-thumbnail"
                                    height="100" width="100" alt="{{ $organization->name }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="phone" placeholder="Enter your phone"
                                    required="" name="phone" value="{{ $organization->phone }}">
                            </div>
                            {{-- <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required="" name="email" value="{{ $organization->email }}">
                            </div> --}}
                            <div class="col-md-6 mb-3">

                                <label for="type">Company Type <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="type" placeholder="Enter type"
                                    required="" name="type" value="{{ $organization->type }}">

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="size">Company Size <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="size" placeholder="Enter number"
                                    required="" name="size" value="{{ $organization->size }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="website">Website Link <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="website"
                                    placeholder="Enter your website" required="" name="website"
                                    value="{{ $organization->website_link }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter your password" min="8" name="password">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="about">About Company <span class="text-danger">*</span></label>
                                <textarea class="form-control about" id="about" name="about" required>{{ $organization->about }}</textarea>
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
            $('.about').summernote({
                height: 300,
            });
        });
    </script>
@endpush
