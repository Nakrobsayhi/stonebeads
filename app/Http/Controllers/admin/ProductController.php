<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $productsc = Product::with('category')->get();
        return view('backend/Product/index', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('backend/Product/add', compact('categories'));
    }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        $category = Category::all();
        return view('backend/product/edit', compact('product', 'category'));
    }

    public function insert(Request $request)
    {
        // Create a new Product instance
        $Product = new Product();
        $Product->name = $request->name;
        $Product->category_id = $request->category_id;
        $Product->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Save the image to the 'public/product' directory
            $image->move(public_path('product'), $imageName);

            // Save the relative path in the database
            $Product->image = 'product/' . $imageName;
        }

        $Product->save();
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect()->route('admin.product.index');
    }



    public function update(Request $request, $product_id)
    {
        // Create a new Product instance
        $Product = Product::find($product_id);
        $Product->name = $request->name;
        $Product->category_id = $request->category_id;
        $Product->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Save the image to the 'public/product' directory
            $image->move(public_path('product'), $imageName);

            // Save the relative path in the database
            $Product->image = 'product/' . $imageName;
        }

        $Product->update();
        alert()->success('Successfully Saved', 'บันทึกสำเร็จ');
        return redirect()->route('admin.product.index');
    }

    public function delete($product_id)
    {
        $Product = Product::find($product_id);
        $Product->delete();
        alert()->success('Successfully Deleted', 'ลบข้อมูลสำเร็จ');
        return redirect('admin/product/index');
    }
}
