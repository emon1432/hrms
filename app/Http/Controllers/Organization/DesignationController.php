<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::orderBy('name', 'asc')->get();
        return view('backend.pages.organization.designation.index', compact('designations'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'slug' => slugify($request->name),
        ]);

        $validate = validator($request->all(), [
            'name' => 'required|string|unique:designations,name',
            'slug' => 'required|string|unique:designations,slug',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        Designation::create($request->all());

        notify()->success('Designation created successfully!');
        return redirect()->route('designations.index');
    }

    public function update(Request $request, string $id)
    {
        $request->merge([
            'slug' => slugify($request->name),
        ]);

        $validate = validator($request->all(), [
            'name' => 'required|string|unique:designations,name,' . $id,
            'slug' => 'required|string|unique:designations,slug,' . $id,
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }

        Designation::find($id)->update($request->all());

        notify()->success('Designation updated successfully!');
        return redirect()->route('designations.index');
    }


    public function destroy(string $id)
    {
        Designation::find($id)->delete();
        notify()->success('Designation deleted successfully!');
        return back();
    }
}
