@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('employee-designation.index') }}" class="btn add-btn">
            <i class="fa fa-list"></i>
            All Designation
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Designation</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee-designation.update', $designations->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="designation_name">Designation <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="designation_name"
                                    placeholder="Enter designation" required="" name="designation_name"
                                    value="{{ $designations->designation_name }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="category_name">Category <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="category_name">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $designations->job_category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            {{-- <div class="col-md-4 mb-3">
                                <label for="profile">Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="profile" required="" accept="image/*"
                                    name="profile"
                                    onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="profile">Preview</label>
                                <img src="{{ asset('uploads/default.png') }}" id="profile_preview" class="img-thumbnail"
                                    height="100" width="100" alt="">
                            </div> --}}

                            <div class="col-md-6 mb-3">
                                <label for="category_name">Status <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="status">
                                        <option selected="selected">Select Status</option>
                                        <option value="1" {{ $designations->status == 1 ? 'selected' : '' }}>Publish
                                        </option>
                                        <option value="0" {{ $designations->status == 0 ? 'selected' : '' }}>
                                            Unpublish</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Save Category</button>
                        <a href="{{ route('employee-designation.index') }}" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
