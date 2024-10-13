@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('job-management.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i>
            Add Job
        </a>
    </div>
@endsection
@section('content')
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Job ID</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Job Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating">
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block"> Search </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Department</th>
                            <th>Job Post Date</th>
                            <th>Deadline</th>
                            <th class="text-center">Job Type</th>
                            <th class="text-center">Status</th>
                            <th>Applicants</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobs as $key => $data)
                            <tr>
                                <td>1</td>
                                <td><a href="">{{ $data->title }}</a></td>
                                <td>{{ $data->jobCategory->category_name }}</td>
                                <td>{{ $data->created_at->format('Y-m-d') }}</td>
                                <td>{{ $data->deadline }}</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-dot-circle-o text-danger"></i> Full
                                            Time
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-info"></i>
                                                Full
                                                Time</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-success"></i>
                                                Part Time</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-danger"></i>
                                                Internship</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-warning"></i>
                                                Temporary</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-warning"></i>
                                                Other</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-dot-circle-o text-danger"></i> Open
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-info"></i>
                                                Open</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-success"></i>
                                                Closed</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-danger"></i>
                                                Cancelled</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="job-applicants.html" class="btn btn-sm btn-primary">3 Candidates</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('job-management.edit', $data->id) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No Job Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Mobile</th>
                            <th>Join Date</th>
                            <th class="text-center no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="" class="avatar">
                                            <img alt="" src="">
                                        </a>
                                        <a href="">
                                            
                                            <span>Web Designer</span>
                                        </a>
                                    </h2>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="" method="POST"
                                        style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        
                            <tr>
                                <td colspan="4" class="text-center">No Employees Found</td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@endsection
