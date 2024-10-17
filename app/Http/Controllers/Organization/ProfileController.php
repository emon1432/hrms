<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        // $organization = auth()->user()->id;
        $organization = Organization::where('user_id', auth()->user()->id)->first();
        if (!$organization) {
            abort(404);
        }

        return view('backend.pages.organization.profile.edit', compact('organization'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        $validate = validator($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email'. $organization->user_id,
            'phone' => 'required|string|max:255',
            'type' => 'required|string|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'banner' => 'nullable|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        $request->merge([
            'role' => 'organization',
        ]);
        if ($request->password) {
            $request->merge([
                'password' => bcrypt($request->password),
            ]);
        } else {
            $request->merge([
                'password' => $organization->user->password,
            ]);
        }
        if ($request->logo) {
            $request->merge([
                'image' => imageUpdateManager($request->logo, slugify($request->name), 'organizations', 200, 200, $organization->logo),
            ]);
        }
        if ($request->banner) {
            $request->merge([
                'image' => imageUpdateManager($request->banner, slugify($request->name), 'organizations', 200, 200, $organization->banner),
            ]);
        }
        $organization->user->update($request->all());
        $organization->update($request->all());
        // User::where('id', $organization->user_id)->update([
        //     'email' => $request->email,
        // ]);


        notify()->success('Profile updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
