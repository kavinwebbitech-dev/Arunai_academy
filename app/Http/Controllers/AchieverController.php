<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achiever;

class AchieverController extends Controller
{
    public function index()
    {
        $achievers = Achiever::latest()->get();
        $years = Achiever::select('year')->distinct()->orderBy('year', 'desc')->pluck('year');

        return view('admin.pages.achievers', compact('achievers', 'years'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'place'      => 'required',
            'category'   => 'required',
            'mark'       => 'required',
            'wing_color' => 'required',
            'year'       => 'required',
            'image'      => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/achievers'), $imageName);

        Achiever::create([
            'name'       => $request->name,
            'place'      => $request->place,
            'category'   => $request->category,
            'mark'       => $request->mark,
            'rank'       => $request->rank,
            'wing_color' => $request->wing_color,
            'year'       => $request->year,
            'image'      => $imageName,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Achiever Added Successfully'
        ]);
        // return redirect()->route('admin.achievers.index')->with('success', 'Achiever Added');
    }

    public function update(Request $request, $id)
    {
        $achiever = Achiever::findOrFail($id);

        $request->validate([
            'name'       => 'required',
            'place'      => 'required',
            'category'   => 'required',
            'mark'       => 'required',
            'wing_color' => 'required',
            'year'       => 'required',
            'image'      => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('uploads/achievers/' . $achiever->image))) {
                unlink(public_path('uploads/achievers/' . $achiever->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/achievers'), $imageName);
            $achiever->image = $imageName;
        }

        $achiever->update([
            'name'       => $request->name,
            'place'      => $request->place,
            'category'   => $request->category,
            'mark'       => $request->mark,
            'rank'       => $request->rank,
            'wing_color' => $request->wing_color,
            'year'       => $request->year,
        ]);

       return response()->json([
            'status' => 'success',
            'message' => 'Achiever Updated Successfully'
        ]);
    }

    public function destroy($id)
    {
        $achiever = Achiever::findOrFail($id);
        if (file_exists(public_path('uploads/achievers/' . $achiever->image))) {
            unlink(public_path('uploads/achievers/' . $achiever->image));
        }
        $achiever->delete();

        return response()->json(['message' => 'Deleted Successfully']);
    }
}
