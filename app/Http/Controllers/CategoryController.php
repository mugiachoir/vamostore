<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admin'] = Admin::find(Auth::user()->id);
        $data['categories'] = Category::latest()->get();
        return view('back.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:50|unique:categories,category_name',
            'category_icon' => 'required|max:255',
        ]);


        $validated['category_name'] = $request->category_name;
        $validated['category_icon'] = $request->category_icon;
        $validated['category_slug'] = strtolower(str_replace(' ', '-', $request->category_name));
        $validated['created_at'] = Carbon::now();

        // BATCH INSERT
        Category::create($validated);

        $notification = array(
            'message' => 'A new category has been added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['admin'] = Admin::find(Auth::user()->id);
        $data['category'] = $category;
        return view('back.category.category_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:50',
            'category_icon' => 'required|max:255',

        ]);

        $validated['category_name'] = $request->category_name;
        $validated['category_icon'] = $request->category_icon;
        $validated['updated_at'] = Carbon::now();

        Category::where('id', $category->id)->update($validated);

        $notification = array(
            'message' => 'A category has been updated',
            'alert-type' => 'success'
        );

        return to_route('all.category')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        $notification = array(
            'message' => 'A category has been deleted',
            'alert-type' => 'success'
        );
        return to_route('all.category')->with($notification);
    }
}