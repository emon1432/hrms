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
                                <label for="job_name">Job Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="job_name"
                                    placeholder="Enter name" required="" name="job_name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="category_name">Category <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="job_category_id">
                                        <option value="" disabled selected>Select Category</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="job_location">Job Location <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="job_location"
                                    placeholder="Enter location" required="" name="job_location">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="job_vacancy">Job Vacancies <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="job_vacancy"
                                    placeholder="Enter vacancy" required="" name="job_vacancy">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="job_experience">Experiences <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="job_experience"
                                    placeholder="Enter experience" required="" name="job_experience">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="gender"
                                    placeholder="Enter gender" required="" name="gender">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="salary_from">Salary Start From <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="salary_from"
                                    placeholder="Enter amount" required="" name="salary_from">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="salary_to">Salary To <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="salary_to"
                                    placeholder="Enter amount" required="" name="salary_to">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="salary_to">Deadline <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="salary_to"
                                    placeholder="Enter vacancy" required="" name="salary_to">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="job_type">Job Type <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="job_type">
                                        <option selected="selected">Select Status</option>
                                        <option value="0">Full Time</option>
                                        <option value="1">Part Time</option>
                                        <option value="1">Intern</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" name="status">
                                        <option selected="selected">Select Status</option>
                                        <option value="0">Open</option>
                                        <option value="1">Closed</option>
                                        <option value="2">Cancelled</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="job_description">Job Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="job_description"
                                    placeholder="Enter Description" required="" name="job_description"></textarea>
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
