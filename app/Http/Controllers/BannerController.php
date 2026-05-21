<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    // Show banner list page
    public function index()
    {
        $banners = Banner::latest()->get();
        // dd($banners);
        return view('admin.pages.banner', compact('banners'));
    }

    // Store new banner image
    public function store(Request $request)
    {
        $request->validate([
            'gallery' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        $path = $request->file('gallery')->store('banners', 'public');
        $imageName = time() . '.' . $request->gallery->extension();
        $request->gallery->move(public_path('uploads/banners'), $imageName);

        Banner::create([
            'image' => $imageName,
            'status' => 1
        ]);

        return back()->with('success', 'Banner uploaded successfully');
    }


     public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validate([
            'gallery'      => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        if ($request->hasFile('gallery')) {
            if (file_exists(public_path('uploads/banners/' . $banner->image))) {
                unlink(public_path('uploads/banners/' . $banner->image));
            }
            $imageName = time() . '.' . $request->gallery->extension();
            $request->gallery->move(public_path('uploads/banners'), $imageName);
            $banner->image = $imageName;
        }

        $banner->update([
            'gallery'       => $request->gallery,
        ]);
        // return back()->with('success', 'Banner uploaded successfully');
         return response()->json([
            'success' => true,
            'message' => 'Banner updated successfully'
        ]);
        // return redirect()->route('banner')->with('success', 'Banner Updated');
    }


    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if (file_exists(public_path('uploads/banners/' . $banner->image))) {
            unlink(public_path('uploads/banners/' . $banner->image));
        }
        $banner->delete();

        return response()->json(['message' => 'Deleted Successfully']);
    }
}
