<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.pages.organization.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'slug' => slugify($request->name)
        ]);
        $validate = validator($request->all(), [
            'name' => 'required|string|unique:categories,name',
            'slug' => 'required|string|unique:categories,slug',
            'icon' => 'required|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }

        if ($request->hasFile('icon')) {
            $request->merge([
                'image' => imageUploadManager($request->icon, $request->slug, 'category', 40, 40),
            ]);
        }

        Category::create($request->all());

        notify()->success('Category created successfully!');
        return redirect()->route('category.index');
    }


    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $request->merge([
            'slug' => slugify($request->name)
        ]);
        $validate = validator($request->all(), [
            'name' => 'required|string|unique:categories,name,' . $category->id,
            'slug' => 'required|string|unique:categories,slug,' . $category->id,
            'icon' => 'nullable|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }

        if ($request->hasFile('icon')) {
            $request->merge([
                'image' => imageUpdateManager($request->icon, $request->slug, 'category', 40, 40, $category->image),
            ]);
        }

        $category->update($request->all());

        notify()->success('Category updated successfully!');
        return redirect()->route('category.index');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        imageDeleteManager($category->image);
        $category->delete();
        notify()->success('Category deleted successfully!');
        return back();
    }
}
