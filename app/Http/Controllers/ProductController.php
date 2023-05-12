<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|integer',
            'name' => 'required',
            'stock' => 'required|integer|min:1',
        ]);



        Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'slug' => $this->getSlug($request->name),
            'stock' => $request->stock,
        ]);

        session()->flash('seccuss', 'The product has been created');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required|integer',
            'name' => 'required',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::find($id);


        $product->category_id = $request->category;
        $product->name = $request->name;
        $product->slug = $this->getSlug($request->name);
        $product->stock = $request->stock;

        $product->save();


        session()->flash('seccuss', 'The product has been updated');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products.index');
    }


    private function getSlug($name)
    {
        $_slug = Str::slug($name);

        if (Product::whereSlug($slug = Str::slug($name))->exists()) {

            if (is_numeric(substr($_slug, -1))) {

                $n = intval(substr($_slug, -1));

                $n++;

                return  $_slug . $n;
            } else {
                return Str::slug($name) . '1';
            }
        }


        return  $_slug;
    }
}
