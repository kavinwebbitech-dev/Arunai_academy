<?php

namespace App\Http\Controllers;

use App\Models\StudyMaterial;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index()
    {
        $materials = StudyMaterial::latest()->get();
        return view('admin.pages.studymaterial', compact('materials'));
    }
    public function frontendList()
    {
        $materials = StudyMaterial::latest()->get();
        return view('frontend.pages.study-material', compact('materials'));
    }
    //  public function indexpage()
    // {
    //     $materials = StudyMaterial::latest()->get();
    //     return view('frontend.pages.index', compact('materials'));
    // }

    public function store(Request $request)
    {
        if (!$request->hasFile('pdf')) {
            return response()->json(['error' => 'File not received']);
        }

        $path = public_path('uploads/materials/');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('pdf');
        $fileName = time() . '.' . $file->extension();
        $file->move($path, $fileName);

        StudyMaterial::create([
            'title' => $request->title,
            'pdf_file' => $fileName,
        ]);

        return response()->json(['success' => true]);
    }



    // ✅ UPDATE
    public function update(Request $request, $id)
    {
        $item = StudyMaterial::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'pdf'   => 'nullable|mimes:pdf'
        ]);

        if ($request->hasFile('pdf')) {
            $old = public_path('uploads/materials/' . $item->pdf_file);
            if (file_exists($old)) {
                unlink($old);
            }

            $fileName = time() . '.pdf';
            $request->pdf->move(public_path('uploads/materials/'), $fileName);
            $item->pdf_file = $fileName;
        }

        $item->title = $request->title;
        $item->save();

        return response()->json(['status' => 'updated']);
    }


    // ✅ DELETE
    public function delete($id)
    {
        $item = StudyMaterial::findOrFail($id);

        $path = public_path('uploads/materials/' . $item->pdf_file);
        if (file_exists($path)) {
            unlink($path);
        }

        $item->delete();

        return response()->json(['status' => 'deleted']);
    }
}
