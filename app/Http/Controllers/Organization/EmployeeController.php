<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Designation;
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
        $designations = Designation::orderBy('name')->get();
        return view('backend.pages.organization.employees.create', compact('designations'));
    }

    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|unique:employees,email',
            'phone' => 'required|string|unique:employees,phone',
            'designation_id' => 'required|exists:designations,id',
            'join_date' => 'nullable|date',
            'salary' => 'nullable|string',
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
            'image' => imageUploadManager($request->profile, slugify($request->first_name . ' ' . $request->last_name), 'employees', 200, 200),
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
        $employee = auth()->user()->organization->employees()->findOrFail($id);
        $designations = Designation::orderBy('name')->get();
        return view('backend.pages.organization.employees.edit', compact('employee', 'designations'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validate = validator($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $employee->user->id . '|unique:employees,email,' . $employee->id,
            'phone' => 'required|string|unique:employees,phone,' . $employee->id,
            'designation_id' => 'required|exists:designations,id',
            'join_date' => 'nullable|date',
            'salary' => 'nullable|string',
            'profile' => 'nullable|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'role' => 'employee',
            'organization_id' => auth()->user()->organization->id,
        ]);
        if ($request->password) {
            $request->merge([
                'password' => bcrypt($request->password),
            ]);
        } else {
            $request->merge([
                'password' => $employee->user->password,
            ]);
        }
        if ($request->profile) {
            $request->merge([
                'image' => imageUpdateManager($request->profile, slugify($request->first_name . ' ' . $request->last_name), 'employees', 200, 200, $employee->image),
            ]);
        }
        $employee->user->update($request->all());
        $employee->update($request->all());

        notify()->success('Employee updated successfully!');
        return redirect()->route('employees.index');
    }

    public function destroy(string $id)
    {

        $employee = Employee::findOrFail($id);
        imageDeleteManager($employee->image);
        $employee->user->delete();
        $employee->delete();

        notify()->success('Employee deleted successfully!');
        return redirect()->route('employees.index');
    }
}
