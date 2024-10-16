@extends('frontend.layouts.master')
@section('content')
    @include('frontend.pages.home.sections.hero')
    @include('frontend.pages.home.sections.category')
    @include('frontend.pages.home.sections.latest-job')
    @include('frontend.pages.home.sections.working-process')
    @include('frontend.pages.home.sections.location')
    @include('frontend.pages.home.sections.review')
    @include('frontend.pages.home.sections.trusted-company')
    @include('frontend.pages.home.sections.top-recruiters')
    {{-- @include('frontend.pages.home.sections.blog') --}}
@endsection
