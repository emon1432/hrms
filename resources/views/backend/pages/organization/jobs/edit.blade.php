@extends('backend.layouts.master')
@push('styles')
    <link href="{{ asset('backend') }}/plugins/summernote/summernote-lite.min.css" rel="stylesheet">
@endpush
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('job.index') }}" class="btn add-btn">
            <i class="fa fa-list"></i>
            All Jobs
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Update Job</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('job.update', $job->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="title">Job Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title"
                                    required="" name="title" value="{{ $job->title }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category_id">Category <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="category_id" required>
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $job->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="vacancy">Vacancy</label>
                                <input type="number" class="form-control" id="vacancy" placeholder="Enter vacancy"
                                    name="vacancy" required value="{{ $job->vacancy }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="experience">Experience</label>
                                <input type="text" class="form-control" id="experience" placeholder="Enter experience"
                                    name="experience" required value="{{ $job->experience }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="gender" required>
                                        <option value="" selected disabled>Select Gender</option>
                                        <option value="Male" {{ $job->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $job->gender == 'Female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="Both" {{ $job->gender == 'Both' ? 'selected' : '' }}>Both</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="salary_from">Salary From</label>
                                <input type="number" class="form-control" id="salary_from" placeholder="Enter salary from"
                                    name="salary_from" required value="{{ $job->salary_from }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="salary_to">Salary To</label>
                                <input type="number" class="form-control" id="salary_to" placeholder="Enter salary to"
                                    name="salary_to" required value="{{ $job->salary_to }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="deadline">Deadline</label>
                                <input type="date" class="form-control" id="deadline" placeholder="Enter deadline"
                                    name="deadline" required value="{{ $job->deadline }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="type">Type <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="type" required>
                                        <option value="" selected disabled>Select Type</option>
                                        <option value="Full Time" {{ $job->type == 'Full Time' ? 'selected' : '' }}>Full
                                            Time</option>
                                        <option value="Part Time" {{ $job->type == 'Part Time' ? 'selected' : '' }}>Part
                                            Time</option>
                                        <option value="Internship" {{ $job->type == 'Internship' ? 'selected' : '' }}>
                                            Internship</option>
                                        <option value="Temporary" {{ $job->type == 'Temporary' ? 'selected' : '' }}>
                                            Temporary</option>
                                        <option value="Other" {{ $job->type == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <div class="form-group form-focus">
                                    <select class="select floating" name="status" required>
                                        <option value="" selected disabled>Select Status</option>
                                        <option value="Open" {{ $job->status == 'Open' ? 'selected' : '' }}>Open
                                        </option>
                                        <option value="Closed" {{ $job->status == 'Closed' ? 'selected' : '' }}>Closed
                                        </option>
                                        <option value="Cancelled" {{ $job->status == 'Cancelled' ? 'selected' : '' }}>
                                            Cancelled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" placeholder="Enter location"
                                    name="location" required value="{{ $job->location }}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control description" id="description" name="description" required>{{ $job->description }}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Update Job</button>
                        <a href="{{ route('job.index') }}" class="btn btn-danger">Cancel</a>
                        <a class="btn btn-primary" href="{{ route('job.edit', $job->id) }}">Reset</a>
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
            $('.description').summernote({
                height: 400,
            });
        });
    </script>
@endpush
