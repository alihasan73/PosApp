<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;
use App\Http\Resources\CategoryResource;

class CategoryController extends BaseController
{
    public function index(Request $request){
        $category = Category::all();
        return CategoryResource::collection($category);
    }
    public function create(Request $request){
        $request->validate([
            'name_category' => "required",
            'image' => "required|image|mimes:jpeg,png,jpg|max:2048"
        ]);
        // mengambil nama
        $name = $request->input('name_category');

        // mendapatakan extensin dari img
        $extension = $request->file('image')->getClientOriginalExtension();

        // buat nama baru
        $imageName = time(). '.' . $extension;

        // simpan kedalam public_path
        $request->image->move(public_path('image'), $imageName);

        $res = Category::create([
            'name_category' => $name,
            'image' => $imageName
        ]);

        return $this->sendResponse(new CategoryResource($res), "Category created successfully");
    }
    public function update(Request $request, $id){
        $request->validate([
            'name_category' => 'required',
            'image' => "required|image|mimes:jpeg,png,jpg|max:2048"
        ]);
        $category = Category::find($id);
        
        if(is_null($category)){
            return response()->json(['message' => 'Category not found']);
        }
        // Storage::delete($category->image)
        dd($category->image);
        $category->name_category = $request->input('name_category');    
        // dd($category);
        
        if($request->hasFile('image')){
            Storage::delete('public/image/'. $category->image);
            // $imagePath = $request->file('image')->store('public/image');
            // $category->image = basename($imagePath);
            // Bangun nama file baru berdasarkan timestamp
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();

            // Simpan gambar baru di folder image
            $request->file('image')->storeAs('public/images', $imageName);

            // Simpan nama file baru dalam kolom gambar
            $category->image = $imageName;
        }
        $res = $category->save();
        return $this->sendResponse(new CategoryResource($res), "Category updated successfully");
    }

}
