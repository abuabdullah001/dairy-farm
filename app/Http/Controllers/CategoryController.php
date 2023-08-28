<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('back-end.category.index');
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'Category info create successfully.');
    }

    public function manage()
    {
        return view('back-end.category.manage', ['categories' => Category::all()]);
    }

    public function edit($id)
    {
        return view('back-end.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Category::updatedCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info update successfully.');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category info delete successfully.');
    }
}
