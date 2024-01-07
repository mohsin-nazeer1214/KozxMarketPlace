<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }
    public function store(Request $request)
    {
       
        try {
            $imageNames = [];
            $videoName = null;
    
            // Handle images
            if ($request->hasFile('images')) {
                $images = $request->file('images');
    
                $imagefullname='';
                foreach ($images as $image) {
                    $imageName = time() . $image->getClientOriginalName();
                   
                    $image->move(public_path('images'), $imageName);
                    $imagefullname .= $imageName.'/_/';
                    $imageNames[] = $imageName;
                }
                // dd($imagefullname);
            }
    
            // Handle video
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $videoName = time() . '_' . $video->getClientOriginalName();
                $video->move(public_path('videos'), $videoName);
                
            }
    
            Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'image' => $imagefullname,
                'video' => $videoName, 
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
            ]);
    
            return redirect('products')->with('success', 'Product added successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // You can customize this error handling based on your needs
            return redirect('products')->with('error', 'Error adding product');
        }
    }
    
    
    
    public function getImages($productId)
    {
        try {
            $product = Product::findOrFail($productId);
    
            $imageNames = explode('/_/', $product->image);
            $imageNames = array_filter($imageNames, 'strlen');

            $imageNames = collect([$imageNames]);


            // dd($imageNames);
            $videoNames =  $product->video;
    
            $media = ['images' => $imageNames, 'videos' => $videoNames];
    
            return response()->json($media);
        } catch (\Exception $e) {
            // Handle the exception if the product is not found
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
            public function profile(){

                $user = Auth::user();

                    return view('profile', compact('user'));
            }

            public function show($id)
            {
                $product = Product::find($id);
                $relatedProducts = Product::where('category_id', $product->category_id)
                    ->where('id', '<>', $product->id) 
                    ->get();

                $images = explode('/_/', $product->image);

                $images = array_filter($images);


                return view('product_details', compact('product', 'relatedProducts', 'images'));
            }

            


}
