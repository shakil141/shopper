<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
USE App\Http\Requests\CategoryRequest;
USE Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('category.list',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriesMenu = Category::where('type',1)->get();
        return view('category.addCategory',[
            'categoriesMenu' => $categoriesMenu
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest $request
     * @param Category $category
     * @return Response
     */
    public function store(CategoryRequest $request, Category $category)
    {
        $category->fill($request->all())->save();
        Session::flash('add-success','Resource added successfully');
        return redirect()->route('categories.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriesMenu = Category::where('type',1)->get();
        $category= Category::query()->findOrFail($id);
        return view('category.editCategory',[
            'category' => $category,
            'categoriesMenu' => $categoriesMenu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::query()->findOrFail($id);
        $category->fill($request->all())->save();
        Session::flash('update-success','Resource updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::query()->findOrFail($id)->delete();
        Session::flash('delete-success','Resource deleted successfully');
        return redirect()->route('categories.index');
    }
}
