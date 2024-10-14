@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="javascript:void(0);" data-toggle="modal" data-target="#add_designation" class="btn add-btn">
            <i class="fa fa-plus"></i>
            Add Designation
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
                            <th>Designation</th>
                            <th>Total Employee</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($designations as $key => $designation)
                            <tr>
                                <td>{{ $designation->name }}</td>
                                <td>{{ $designation->employees->count() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No Designation Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="add_designation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Designation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('designations.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-block mb-3">
                                    <label class="col-form-label" for="name">
                                        Designation
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="text" id="name" name="name" required="">
                                </div>
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
