<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = JobCategory::where('status', 1)->get();
        return view('backend.pages.organization.job-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.organization.job-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'category_name' => 'required|unique:job_categories,category_name',
            'slug' => 'unique:job_categories,slug',
            'profile' => 'required|image|mimes:png|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'image' => imageUploadManager($request->profile, slugify($request->category_name), 'job_category', 40, 40),
            'created_by' => auth()->user()->organization->id,
            'slug' => slugify($request->category_name),
        ]);
        JobCategory::create($request->all());
        

        notify()->success('Category created successfully!');
        return redirect()->route('job-category.index');
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
        $job_category = JobCategory::where('created_by', auth()->user()->organization->id)->findOrFail($id);

        return view('backend.pages.organization.job-category.edit', compact('job_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job_category = JobCategory::findOrFail($id);
        $validate = validator($request->all(), [
            'category_name' => 'required',
            // 'slug' => 'unique:job_categories,slug',
            'profile' => 'required|image|mimes:png|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'organization_id' => auth()->user()->organization->id,
            'image' => imageUploadManager($request->profile, slugify($request->category_name), 'job_category', 40, 40),
            'updated_by' => auth()->user()->organization->id,
            'slug' => slugify($request->category_name),
        ]);
        $job_category->update($request->all());

        notify()->success('Category updated successfully!');
        return redirect()->route('job-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
