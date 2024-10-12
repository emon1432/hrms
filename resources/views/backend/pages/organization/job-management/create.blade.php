@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('job-management.index') }}" class="btn add-btn">
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
                    <h5 class="card-title mb-0">Add New Job</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('job-management.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="title">Job Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title"
                                    required="" name="title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="category_name">Category <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="category_name">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($job_categories as $job_category)
                                            <option value="{{ $job_category->id }}">
                                                {{ $job_category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="location">Job Location <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="location" placeholder="Enter location"
                                    required="" name="location">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="vacancy">Job Vacancies <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="vacancy" placeholder="Enter vacancy"
                                    required="" name="vacancy">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="experience">Experiences <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="experience"
                                    placeholder="Enter experience" required="" name="experience">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="gender" placeholder="Enter gender"
                                    required="" name="gender">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="salary_from">Salary Start From <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="salary_from" placeholder="Enter amount"
                                    required="" name="salary_from">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="salary_to">Salary To <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="salary_to" placeholder="Enter amount"
                                    required="" name="salary_to">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="deadline">Deadline <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="deadline" placeholder="Enter vacancy"
                                    required="" name="deadline">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="type">Job Type <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="type">
                                        <option selected="selected">Select job type</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Internship">Internship</option>
                                        <option value="Temporary">Temporary</option>
                                        <option value="Other">Other</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="status"> Job Status <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="status">
                                        <option selected="selected">Select Status</option>
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                        <option value="Cancelled">Cancelled</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="description">Job Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" placeholder="Enter Description" required=""
                                    name="description"></textarea>
                            </div>

                        </div>
                        <button class="btn btn-info" type="submit">Save Category</button>
                        <a href="{{ route('job-management.index') }}" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('backend-js')
    <script>
        $(document).ready(function() {
            // summernote editor
            $('#description').summernote({
                placeholder: ' Job description',
                height: 150,
                

            });

        });
    </script>
@endpush
