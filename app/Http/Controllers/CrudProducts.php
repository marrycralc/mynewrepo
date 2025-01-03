<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class CrudProducts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
       
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeproduct(Request $request)
    {  $product = new Products();
        dd($product->images());
        // Validate the request
        $validated = $request->validate([
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'imageupload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = new Products();
        $product->prodcut_name = $request->input('product_name');
        $product->descrioption = $request->input('description');
        $product->price = $request->input('price');
        $product->stock_quantity = $request->input('stock_quantity');
        $product->save();
        
        if ($request->hasFile('imageupload')) {
            $image = $request->file('imageupload');
            $path = $image->store('images/products', 'public');
        
          
            $product->images()->create([
                'image_url' => $path,
                'product_id' => $product->id    
            ]);
        }
        
        return redirect()->route('prodcut.newproduct')->with('success', 'Product created successfully!');
    
    }
    

public function showproduts()
{
    // Fetch all products
    $products = Products::paginate(5);


    // Pass products to the view
    return view('auth.createproduct', compact('products'));
    
}
    /**
     * Show the form for editing the specified resource.
     */
    public function editproducts(Request $request, string $id)
    {
        $product = Products::findOrFail($id);
        return view('auth.editproduct', compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function updateproduct(Request $request, string $id)
    {
      
    
        $product = Products::findOrFail($id);
        $product->prodcut_name = $request->input('product_name');
        $product->descrioption = $request->input('description');
        $product->price = $request->input('price');
        $product->stock_quantity = $request->input('stock_quantity');
        $product->save();
    
        return redirect()->route('prodcut.editproduct', $id)->with('success', 'Product updated successfully!');
    }
    
  
    /**
     * Remove the specified resource from storage.
     */
    public function deleteproduct(string $id)
    {
        
       
                // Delete logic
                $product = Products::findOrFail($id);
                $product->delete();
                return redirect()->route('prodcut.newproduct')->with('success', 'Product deleted successfully!');
            
          
    }
}
