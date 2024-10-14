@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_category" class="btn add-btn">
            <i class="fa fa-plus"></i>
            Add Category
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Category</th>
                            <th>Total Jobs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $key => $category)
                            <tr>
                                <td>
                                    <img src="{{ imageShow($category->image) }}" class="img-fluid" width="50"
                                        height="50" alt="">
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->jobs->count() }}</td>
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
    <div id="add_category" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-block mb-3">
                                    <label class="col-form-label" for="name">
                                        Category
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="text" id="name" name="name" required="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="input-block mb-3">
                                    <label class="col-form-label" for="icon">
                                        Category Icon
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="file" id="icon" name="icon" required=""
                                    accept="image/*"
                                        onchange="document.getElementById('icon_preview').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img src="{{ asset('uploads/default.png') }}" id="icon_preview" class="img-thumbnail"
                                    height="100" width="100" alt="">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
