<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = auth()->user()->organization->jobs;
        return view('backend.pages.organization.jobs.index', compact('jobs'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('backend.pages.organization.jobs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'slug' => slugify($request->title),
        ]);
        $validate = validator($request->all(), [
            'title' => 'required|string',
            'slug' => 'required|string',
            'organization_id' => 'required|integer|exists:organizations,id',
            'category_id' => 'required|integer|exists:categories,id',
            'location' => 'required|string',
            'vacancy' => 'required|string',
            'experience' => 'required|string',
            'gender' => 'required|string|in:Male,Female,Both',
            'salary_from' => 'nullable|numeric|min:0',
            'salary_to' => 'nullable|numeric|min:0|gte:salary_from',
            'deadline' => 'nullable|date|after:today',
            'type' => 'required|string|in:Full Time,Part Time,Internship,Temporary,Other',
            'status' => 'required|string|in:Open,Closed,Cancelled',
            'description' => 'nullable|string',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        Job::create($request->all());
        notify()->success('Job created successfully!');
        return redirect()->route('job.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $job = auth()->user()->organization->jobs()->findOrFail($id);
        $categories = Category::orderBy('name')->get();
        return view('backend.pages.organization.jobs.edit', compact('categories', 'job'));
    }

    public function update(Request $request, string $id)
    {
        $job = auth()->user()->organization->jobs()->findOrFail($id);
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'slug' => slugify($request->title),
        ]);
        $validate = validator($request->all(), [
            'title' => 'required|string',
            'slug' => 'required|string',
            'organization_id' => 'required|integer|exists:organizations,id',
            'category_id' => 'required|integer|exists:categories,id',
            'location' => 'required|string',
            'vacancy' => 'required|string',
            'experience' => 'required|string',
            'gender' => 'required|string|in:Male,Female,Both',
            'salary_from' => 'nullable|numeric|min:0',
            'salary_to' => 'nullable|numeric|min:0|gte:salary_from',
            'deadline' => 'nullable|date|after:today',
            'type' => 'required|string|in:Full Time,Part Time,Internship,Temporary,Other',
            'status' => 'required|string|in:Open,Closed,Cancelled',
            'description' => 'nullable|string',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $job->update($request->all());

        notify()->success('Job updated successfully!');
        return redirect()->route('job.index');
    }

    public function destroy(string $id)
    {
        $job = auth()->user()->organization->jobs()->findOrFail($id);
        $job->delete();
        notify()->success('Job deleted successfully!');
        return redirect()->route('job.index');
    }
}
