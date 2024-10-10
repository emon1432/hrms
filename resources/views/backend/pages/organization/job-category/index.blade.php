@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href=" {{ route('job-category.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i>
            Add Category
        </a>
    </div>
@endsection
@section('content')
    {{-- <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee ID</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
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
    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Created By Organization</th>
                            <th>Status</th>
                            <th class="text-center no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $key => $category)
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ $category->category_name }}" class="avatar">
                                            <img alt="{{ $category->category_name }}" src="{{ imageShow($category->image) }}">
                                        </a>
                                        <a href="">
                                            {{ $category->category_name }}
                                        </a>
                                    </h2>
                                </td>
                                <td>{{ $category->organization->name }}</td>
                                <td>{{ $category->status == '0' ? 'Unpublish' : 'Publish' }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No Category Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
