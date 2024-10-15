<div class="home1-category pt-120 mb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                <div class="section-title1">
                    <h2>Trending Jobs <span>Category</span></h2>
                    <p>To choose your trending job dream & to make future bright.</p>
                </div>
                <div class="explore-btn">
                    <a href="{{ route('categories.index') }}">Explore More <span><img
                                src="{{ asset('frontend') }}/images/icon/explore-elliose.svg" alt></span></a>
                </div>
            </div>
        </div>
        <div
            class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 cf justify-content-center">
            @foreach ($categories as $key => $category)
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ imageShow($category->image) }}" alt>
                            </div>
                            <div class="sl-no">
                                <h6>{{ $key + 1 }}</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5>
                                <a href="{{ route('jobs.index', ['category' => $category->slug]) }}">
                                    {{ $category->name }}
                                </a>
                            </h5>
                            <p>Job Available: <span>{{ $category->jobs->count() }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
