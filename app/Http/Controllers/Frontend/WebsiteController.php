<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        return view('frontend.pages.home.index', compact('categories'));
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }

    public function categories()
    {
        $categories = Category::orderBy('name')->get();
        return view('frontend.pages.categories.index', compact('categories'));
    }

    public function companies()
    {
        return view('frontend.pages.companies.index');
    }

    public function company($slug)
    {
        return view('frontend.pages.companies.show');
    }

    public function jobs()
    {
        $jobs = Job::orderBy('id', 'desc')
            ->when(request()->category, function ($query) {
                return $query->whereHas('category', function ($query) {
                    $query->where('slug', request()->category);
                });
            })
            ->get();
        return view('frontend.pages.jobs.index', compact('jobs'));
    }

    public function job($slug)
    {
        $job = Job::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.jobs.show', compact('job'));
    }

    public function blogs()
    {
        return view('frontend.pages.blogs.index');
    }

    public function blog($slug)
    {
        return view('frontend.pages.blogs.show');
    }
}
