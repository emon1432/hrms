@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('job-category.index') }}" class="btn add-btn">
            <i class="fa fa-list"></i>
            All Category
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('job-category.update', auth()->user()->organization->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="category_name">Category Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="category_name"
                                    placeholder="Enter your first name" required="" name="category_name"
                                    value="{{ $job_category->category_name }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="profile">Category Image (PNG)<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="profile" required="" accept="image/*"
                                    name="profile"
                                    onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="profile">Preview</label>
                                <img src="{{ imageShow($job_category->image) }}" id="profile_preview" class="img-thumbnail"
                                    height="100" width="100" alt="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="status">
                                        <option value="1" {{ $job_category->status == 1 ? 'selected' : '' }}>Publish
                                        </option>
                                        <option value="0" {{ $job_category->status == 0 ? 'selected' : '' }}>
                                            Unpublish</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Update Category</button>
                        <a href="{{ route('job-category.index') }}" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
