<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('backend/category/index', compact('category'));
    }

    public function add()
    {
        return view('backend/category/add');
    }

    public function edit($category_id)
    {
        $Category = Category::find($category_id);
        return view('backend/Category/edit', compact('Category'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $Category = new Category();
        $Category->name = $request->name;
        $Category->save();

        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect('admin/category/index');
    }

    public function update(Request $request, $category_id)
    {
        $Category = Category::find($category_id);
        $Category->name = $request->name;
        $Category->update();

        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect('admin/category/index');
    }

    public function delete($category_id)
    {
        $Category = Category::find($category_id);
        $Category->delete();
        alert()->success('Successfully Deleted', 'ลบข้อมูลสำเร็จ');
        return redirect('admin/category/index');
    }

}
