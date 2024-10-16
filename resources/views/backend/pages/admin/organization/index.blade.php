@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('organizations.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i>
            Add Organization
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company Type</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($organizations as $key=>$organization)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="" class="avatar">
                                            <img src="{{ imageShow($organization->image) }}" height="40" width="40"
                                                alt="{{ $organization->name }}">
                                        </a>
                                        <a href="">
                                            {{ $organization->name }}
                                        </a>
                                    </h2>
                                </td>
                                <td>{{ $organization->type }}</td>
                                <td>{{ $organization->phone }}</td>
                                <td>{{ $organization->address }}</td>
                                <td></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href=""><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href=""
                                                onclick="event.preventDefault(); document.getElementById('delete-job-').submit();"><i
                                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            <form id="delete-job-"
                                                action="" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center">No Jobs Found</td>
                            </tr>
                            @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
