<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\EmployeeDesignation;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $designations = EmployeeDesignation::where('status', 1)->get();
        
        return view('backend.pages.organization.employee-designation.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $job_categories = JobCategory::where('status', 1)->get();
        

        return view('backend.pages.organization.employee-designation.create', compact('job_categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'designation_name' => 'required|unique:employee_designations,designation_name',
            'category_name' => 'required',
            'slug' => 'unique:employee_designations,slug',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'job_category_id' => $request->category_name,
            'slug' => slugify($request->designation_name),
        ]);
        EmployeeDesignation::create($request->all());
        

        notify()->success('Designation created successfully!');
        return redirect()->route('employee-designation.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
