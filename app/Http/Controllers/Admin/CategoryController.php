<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $Categories = Category::all();

        return view('Admin.dashadmin.category.category', compact('Categories'));
    }

    public function create()
    {
        return view('Admin.dashadmin.category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $validatedData = $request->validated();

        Category::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Category created successfully.');
    }

    public function show()
    {

    }

    public function edit(Category $category)
    {
        return view('Admin.dashadmin.category.update', compact('category'));
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back();
    }
}
