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
        //
    }

    public function appliedJobs()
    {
        return view('frontend.pages.candidate.sections.applied-jobs');
    }
}
