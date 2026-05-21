<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AchieverController;
use App\Models\MediaVideo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Gallery;

class AdminController extends Controller
{

    public function video()
    {
        $totalVideos = MediaVideo::count();

        return view('admin.pages.dashboard', compact('totalVideos'));
    }

    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }
     public function loginPage(){
        return view('admin.layouts.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'gallery' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        // image upload
        $imageName = time() . '.' . $request->gallery->extension();
        $request->gallery->move(public_path('uploads/gallery'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'image' => $imageName,
        ]);

        return back()->with('success', 'Gallery Image Added');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        unlink(public_path('uploads/gallery/' . $gallery->image));

        $gallery->delete();

        return back()->with('success', 'Deleted Successfully');
    }

   public function category()
{
    $galleries = Gallery::latest()->get();

    return view('admin.pages.categories', compact('galleries'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'gallery' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    $gallery = Gallery::findOrFail($id);
    $gallery->title = $request->title;

    if ($request->hasFile('gallery')) {
        // delete old image
        $oldPath = public_path('uploads/gallery/' . $gallery->image);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        // upload new image
        $file = $request->file('gallery');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/gallery'), $filename);

        $gallery->image = $filename;
    }

    $gallery->save();

    return response()->json([
        'success' => true,
        'message' => 'Gallery updated successfully!'
    ]);
}

public function gallerydestroy($id)
{
    $gallery = Gallery::findOrFail($id);

    // delete image file
    $imagePath = public_path('uploads/gallery/' . $gallery->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $gallery->delete();

    return response()->json([
        'success' => true,
        'message' => 'Gallery deleted successfully!'
    ]);
}
public function loginCheck(Request $request)

    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            // Get the authenticated user
            $user = Auth::user();


            // Check role
            // if ($user->role == 1) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login successful!',
                    'redirect' => route('admin.dashboard') // Admin dashboard
                ]);
            // } else {
            //     // Logout if role is not admin (optional)
            //     Auth::logout();
            //     return response()->json([
            //         'status' => false,
            //         'message' => 'You are not authorized to access this page.'
            //     ]);
            // }
        }

        return response()->json([
            'status' => false,
            'message' => 'Invalid email or password'
        ]);
    }
     public function Dashboard()
    {
        $categoryCount = Gallery::count();

        return view('admin.pages.dashboard', compact(
            'categoryCount',
        ));
    }

}
