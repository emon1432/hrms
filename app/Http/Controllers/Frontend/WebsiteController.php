<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.index');
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }

    public function categories()
    {
        return view('frontend.pages.categories.index');
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
        return view('frontend.pages.jobs.index');
    }

    public function job($slug)
    {
        return view('frontend.pages.jobs.show');
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
