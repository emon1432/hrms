<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = auth()->user()->organization->employees;
        return view('backend.pages.organization.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('backend.pages.organization.employees.create');
    }

    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|unique:employees,email',
            'phone' => 'required|string',
            'password' => 'required|string|min:8',
            'profile' => 'nullable|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'role' => 'employee',
            'organization_id' => auth()->user()->organization->id,
            'password' => bcrypt($request->password),
            'image' => imageUploadManager($request->profile, slugify($request->first_name . ' ' . $request->last_name), 'users', 200, 200),
        ]);
        $user = User::create($request->all());
        $user->employee()->create($request->all());

        notify()->success('Employee created successfully!');
        return redirect()->route('employees.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('backend.pages.organization.employees.edit', compact('employee'));
    }

    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $validate = validator($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $employee->user_id . '|unique:employees,email,' . $employee->id,
            'phone' => 'required|string',
            'password' => 'nullable|string|min:8',
            'profile' => 'nullable|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'role' => 'employee',
            'organization_id' => auth()->user()->organization->id,
            'image' => imageUploadManager($request->profile, slugify($request->first_name . ' ' . $request->last_name), 'users', 200, 200),
        ]);
        $employee->user->update($request->all());
        $employee->update($request->all());

        notify()->success('Employee updated successfully!');
        return redirect()->route('employees.index');
    }

    public function destroy(string $id)
    {

        $employee = Employee::findOrFail($id);
        imageDeleteManager($employee->image);
        $employee->delete();

        notify()->success('Employee deleted successfully!');
        return back();

    }
}
