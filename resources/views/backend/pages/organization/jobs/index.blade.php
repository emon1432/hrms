@extends('backend.layouts.master')
@section('action-button')
    <div class="col-auto float-right ml-auto">
        <a href="{{ route('job.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i>
            Add Job
        </a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        {{-- $table->id();
                        $table->string('title');
                        $table->string('slug');
                        $table->foreignId('organization_id')->constrained()->onDelete('cascade');
                        $table->foreignId('category_id')->constrained()->onDelete('cascade');
                        $table->string('location')->nullable();
                        $table->string('vacancy')->nullable();
                        $table->string('experience')->nullable();
                        $table->enum('gender', ['Male', 'Female', 'Both'])->default('Both');
                        $table->decimal('salary_from', 10, 2)->nullable();
                        $table->decimal('salary_to', 10, 2)->nullable();
                        $table->date('deadline')->nullable();
                        $table->enum('type', ['Full Time', 'Part Time', 'Internship', 'Temporary', 'Other'])->default('Full Time');
                        $table->enum('status', ['Open', 'Closed', 'Cancelled']);
                        $table->longText('description')->nullable();
                        $table->timestamps(); --}}
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Posted</th>
                            <th>Deadline</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Applicants</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobs as $key=>$job)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><a href="{{ route('job.show', $job->id) }}">{{ $job->title }}</a></td>
                                <td>{{ $job->category->name }}</td>
                                <td>{{ Carbon\Carbon::parse($job->created_at)->format('d M Y') }}</td>
                                <td>{{ Carbon\Carbon::parse($job->deadline)->format('d M Y') }}</td>
                                <th>{{ $job->type }}</th>
                                <td>
                                    @if ($job->status == 'Open')
                                        <span class="badge bg-inverse-success">Open</span>
                                    @elseif($job->status == 'Closed')
                                        <span class="badge bg-inverse-danger">Closed</span>
                                    @else
                                        <span class="badge bg-inverse-warning">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                        3 Candidates
                                    </a>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('job.edit', $job->id) }}"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('job.destroy', $job->id) }}"
                                                onclick="event.preventDefault(); document.getElementById('delete-job-{{ $job->id }}').submit();"><i
                                                    class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            <form id="delete-job-{{ $job->id }}"
                                                action="{{ route('job.destroy', $job->id) }}" method="POST"
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
