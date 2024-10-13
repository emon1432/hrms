<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::where('created_by', auth()->user()->organization->id)->latest()->get();
        
        return view('backend.pages.organization.job-management.index' , compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $job_categories = JobCategory::where('status', 1)->get();
        return view('backend.pages.organization.job-management.create', compact('job_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'title' => 'required',
            'category_name' => 'required',
            'location' => 'required',
            'vacancy' => 'required',
            'experience' => 'required',
            'gender' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            'type' => 'required',
            'status' => 'required',
            'description' => 'required',
            
            
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'job_category_id' => $request->category_name,
            'created_by' => auth()->user()->organization->id,
            'slug' => slugify($request->title),
        ]);

        // return response()->json($request);

        Job::create($request->all());
        

        notify()->success('Job created successfully!');
        return redirect()->route('job-management.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobs = Job::with('createdBy', 'updatedBy')->where('created_by', auth()->user()->organization->id)->findOrFail($id);
        $job_categories = JobCategory::where('status', 1)->get();
        return view('backend.pages.organization.job-management.edit', compact('job_categories','jobs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jobs = Job::findOrFail($id);
        $validate = validator($request->all(), [
            'title' => 'required',
            'category_name' => 'required',
            'location' => 'required',
            'vacancy' => 'required',
            'experience' => 'required',
            'gender' => 'required',
            'salary_from' => 'required',
            'salary_to' => 'required',
            'type' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'job_category_id' => $request->category_name,
            'updated_by' => auth()->user()->organization->id,
            'slug' => slugify($request->title),
        ]);
        $jobs->update($request->all());

        notify()->success('Job updated successfully!');
        return redirect()->route('job-management.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
