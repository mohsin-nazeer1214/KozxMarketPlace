<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Product;
use App\Models\Category; 
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
    
            $imagePath = 'images/' . $imageName;
        } else {
            $imagePath = null;
        }
    
        // Create category record
        Category::create([
            'name' => $request->input('name'),
            'image' => $imagePath,
        ]);
    
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    
    public function front(){

        $products = Product::where('category_id','1')->get();
        $vehcles = Product::where('category_id','2')->get();
        $reallestate = Product::where('category_id','3')->get();
        return view('welcome', compact('products','vehcles','reallestate'));
    }
    // Add update, edit, and delete methods as needed
}
