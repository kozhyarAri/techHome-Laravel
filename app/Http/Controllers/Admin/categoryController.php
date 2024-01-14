<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categores = Category::all();
        return view('admin.category.index',compact('categores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|min:2',
            'image'=>'nullable|mimes:png,jpg,jpeg,svg',
        ]);
        if($request->image){
            $image = $request->image;
            $imageName = time().hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/category_image'), $imageName);
            $category = Category::create([
                'name'=> $validated['name'],
                'image' => $imageName
            ]);
        }else{
            $category = Category::create([
                'name'=> $validated['name'],
            ]);
        }

        if($category){
            return redirect()->route('category.index')->with('msg','Category Added');
        }
        return redirect()->route('category.create')->with('msg','Somthing Wrong');

    }

    public function edit(string $id)
    {
        $category = Category::findOrfail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrfail($id);
        $validated = $request->validate([
            'name'=> 'required|min:2',
            'image'=>'nullable|mimes:png,jpg,jpeg,svg',
        ]);
        $path = 'assets/images/category_image/'.$category->image;
        if ($request->image) {
            if($category->image && file_exists($path)){
                unlink($path);
            }
            $image = $request->image;
            $imageName = time().hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/category_image'), $imageName);
            $category->update([
                'name'=> $validated['name'],
                'image' => $imageName
            ]);
        } else {
            $category->update([
                'name' => $validated['name'],
            ]);
        }
            
        if($category){
            return redirect()->back()->with('msg','Category Upadted');
        }
        return redirect()->back()->with('msg','Somthing Wrong');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrfail($id);
        $path = 'assets/images/category_image/'.$category->image;
        if($category->image && file_exists($path)){
            unlink($path);
        }
        $category->delete();
        return redirect()->back()->with('msg','Category deleted');
    }
}
