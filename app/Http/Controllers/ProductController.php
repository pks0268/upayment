<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Show the product list publicly
    */
    public function index() {

        return view('products');
    }

    /**
     * Add new Product Form
     * Only can do logged-in user
     */
    public function addnew() {
        $categories = Categories::select('id','name')->where('status', true)->get()->toArray();
        return view('products_add_new', compact('categories'));
    }

    /**
     * Save the product Data in database
     * Only can do logged-in User
     */
    public function store(Request $request) {

        $validatedData = $request->validate([
            'product_category' => ['required', 'integer', 'max:255'],
            'product_name' => ['required'],
            'product_price' => ['required', 'numeric'],
            'product_desc' => ['required'],
            'product_avtar' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048']
        ], [
            'product_category.required' => 'Please select product category!',
            'product_name.required' => 'Please enter product name!',
            'product_price.required' => 'Please enter product price!',
            'product_price.numeric' => 'Please enter valid price!',
            'product_desc.required' => 'Please enter product description!',
            'product_avtar.required' => 'Please choose product image!',
            'product_avtar.image' => 'Please choose only jpeg, png image!',
            'product_avtar.max' => 'File max size should be 2MB!',
        ]);

        if($validatedData) {
            try {

                $productCategory = $request->input('product_category');
                $productName = $request->input('product_name');
                $productPrice = $request->input('product_price');
                $productDesc = $request->input('product_desc');
                $productAvtar = $request->file('product_avtar');

                /**
                 * File save on storage directory
                 * Under the products directory
                */
                $filePath = $productAvtar->store('products');

                DB::beginTransaction();

                $products = new Products();
                $products->name = $productName;
                $products->price = $productPrice;
                $products->category_id = $productCategory;
                $products->description = $productDesc;
                $products->status = Products::STATUS_ACTIVE;
                $products->avatar = $filePath;
                $products->save();

                DB::commit();

                $status = true;
                $message = 'Product has been added successfully.';

            } catch (\Exception $e) {

                DB::rollBack();

                $status = false;
                $message = $e->getMessage();
            }

            return redirect('products/addnew')->with(['status' => $status, 'message' => $message]);

        }
    }
}
