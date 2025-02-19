<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        // Fetch all articles without any condition
        $categories = Category::all();
        
        // Pass the articles to the view
        return view('website.category.category', compact('categories')); 
    }

    
    public function create() {
        return view('website.category.create-category'); 
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newcategory = category::create($data);
        return redirect()->route('category');
    }
    public function edit(category $category) {
        return view('website.category.edit-category', ['category' => $category]);
    }
    public function update(Request $request, category $category) {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $category->update($data);
        return redirect()->route('category');
    }
    public function destroy(category $category) {
        $category->delete();
        return redirect()->route('category');
    }
}
