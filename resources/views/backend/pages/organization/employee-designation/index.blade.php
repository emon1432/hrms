@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('employee-designation.create') }}" class="btn add-btn">
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
                            <th>Category</th>
                            <th>Created By Organization</th>
                            <th>Status</th>
                            <th class="text-center no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($designations as $key => $designation)
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html">
                                            {{ $designation->designation_name }}
                                        </a>
                                    </h2>
                                </td>
                                <td>{{ $designation->jobCategory->category_name }}</td>
                                <td>{{ $designation->organization->name }}</td>
                                <td>{{ $designation->status == '0' ? 'Unpublish' : 'Publish' }}</td>
                                <td class="text-center">

                                    @if ($designation->created_by == auth()->user()->organization->id)
                                        <a href="{{ route('employee-designation.edit', $designation->id) }}"
                                            class="btn btn-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    @else
                                        <a href="" class="btn btn-primary" disabled>
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    @endif

                                    {{-- (auth()->user()->role == 'organization' && $blog->status == 1 && $blog->created_by ==
                                    auth()->user()->id)
                                    <a href="{{ route('employee-designation.edit', $designation->id) }}"
                                        class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>
                                        @elseif
                                        <a href="" class="btn btn-primary" disabled>
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('employee-designation.destroy', $designation->id) }}"
                                            method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form> --}}






                                </td>
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
@endsection
