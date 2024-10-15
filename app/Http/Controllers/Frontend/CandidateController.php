<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function dashboard()
    {
        return view('frontend.pages.candidate.sections.dashboard');
    }

    public function profile()
    {
        return view('frontend.pages.candidate.sections.profile');
    }

    public function updateProfile(Request $request)
    {
        $candidate = auth()->user()->candidate;

        $request->merge([
            'uuid' => uniqid(),
        ]);
        $validate = validator($request->all(), [
            'uuid' => 'required|string|unique:candidates,uuid,' . $candidate->id,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|',
            'phone' => 'required|string',
            'dob' => 'required|date',
            'website' => 'nullable|url',
            'current_location' => 'required|string',
            'current_job' => 'nullable|string',
            'designation' => 'nullable|string',
            'current_salary' => 'nullable|string',
            'expected_salary' => 'nullable|string',
            'career_objective' => 'nullable|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $validate->sometimes('profile', 'required|image|max:2048', function () use ($candidate) {
            return is_null($candidate->image);
        });

        $validate->sometimes('cv', 'required|mimes:pdf', function () use ($candidate) {
            return is_null($candidate->cv);
        });

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        if ($request->has('profile')) {
            $request->merge([
                'image' => imageUploadManager($request->profile, slugify($request->first_name . ' ' . $request->last_name), 'candidates', 200, 200),
            ]);
        }
        if ($request->has('cv')) {
            $request->merge([
                'cv' => fileUploadManager($request->cv, slugify($request->first_name . ' ' . $request->last_name), 'candidates', 'pdf'),
            ]);
        }
        $data = $request->except('_token', 'profile');
        $candidate->update($data);

        notify()->success('Profile updated successfully!');
        return back();
    }

    public function appliedJobs()
    {
        return view('frontend.pages.candidate.sections.applied-jobs');
    }
}
